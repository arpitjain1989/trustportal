<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\Vendor;
use App\Models\VendorService;
use DB;
use Redirect;
use Brick\Math\BigInteger;
use Log;
use Auth;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class AddService extends Component
{
    use WithFileUploads;


    public $form_count = 2;
    public $loop = 1;
    public $email;
    public $otp;
    public $is_disabled = false;
    // Form Properties
    public $category;
    public $sub_category;
    public $service_image;
    public $general_description;
    public $technical_description;

    // pre loaded iteration data
    public $category_array;
    public $sub_category_array;
    public $my_services;

    protected $rules = [
        'category' => 'required',
        'sub_category' => 'required',
        'service_image' => 'required|max:5',
        'general_description' => 'required',
        'technical_description' => 'required',
    ];

    protected $messages = [
        'category.required' => 'Please select any service',
        'sub_category.required' => 'Please select sub category of a service',
        'service_image.required' => 'Please select images to upload',
        // 'service_image.mimes' => 'Selected image format is not supported',
        'service_image.max' => 'Maximum 5 images can be uploaded',
        'general_description.required' => 'General description is required',
        'technical_description.required' => 'Technical description is required',
    ];

    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        $this->category_array = DB::table('services')->get();
        $this->sub_category_array = DB::table('sub_services')->skip(1)->take(0)->get();
        if($this->category != '')
        {
            $this->sub_category_array = DB::table('sub_services')->where('service_id', $this->category)->get();
        }

        $this->my_services = VendorService::where('vendor_id', auth()->guard('vendor')->user()->id)->with('images', 'subcategory', 'category')->orderBy('id', 'desc')->get();

        return view('livewire.add-service');
    }

    public function addService()
    {
        $this->resetErrorBag();
        $this->validate();

        $vendor_id = auth()->guard('vendor')->user()->id;
        $category_id = $this->category;
        $sub_category_id = $this->sub_category;
        $general_description = $this->general_description;
        $technical_description = $this->technical_description;

        $has_sub_category = DB::table('vendor_services')->where(['vendor_id' => $vendor_id, 'sub_service_id' => $sub_category_id])->first();

        if($has_sub_category)
        {
            session()->flash('add_service_message', 'A service with same category already exists in your id!');
        }
        else
        {
            $current_time = Carbon::now()->toDateTimeString();
            try
            {
                $service_id = DB::table('vendor_services')->insertGetId([
                    'vendor_id' => $vendor_id,
                    'service_id' => $category_id,
                    'sub_service_id' => $sub_category_id,
                    'general_desc' => $general_description,
                    'tech_desc' => $technical_description,
                    'created_at' => $current_time,
                    'updated_at' => $current_time,
                ]);

                // Store Photos upload code.
                $image_file_path = "";
                $photo_array = [];
                if (is_array($this->service_image) && count($this->service_image) > 0)
                {
                    $total_doc = count($this->service_image);
                    for($i = 0; $i <= $total_doc - 1; $i++)
                    {
                        $fileName = $this->service_image[$i]->getClientOriginalName();
                        $fileName = str_replace(" ", "_", $fileName);
                        $photo_file_path = $this->service_image[$i]->storeAs('upload/services', $fileName, 's3');
                        //insert the document one by one
                        array_push($photo_array,
                        array(
                            'vendor_service_id' => $service_id,
                            'image' => $photo_file_path,
                            'created_at' => $current_time,
                            'updated_at' => $current_time,
                        ));
                    }
                    DB::table('vendor_service_photos')->insert( $photo_array );
                }
                $this->is_disabled = false;
                session()->flash('add_service_message', 'Service added successfully !');

                $this->sub_category = '';
                $this->service_image = '';
                $this->general_description = '';
                $this->technical_description = '';
            }
            catch(\Exception $e)
            {
                Log::info('Adding vendor service error : '. $e);
                $this->is_disabled = false;
                session()->flash('add_service_message', 'Something went wrong while adding service');
            }
        }

    }


    public function deleteService($service_id)
    {
        try
        {
            $service_images = DB::table('vendor_service_photo')->where('service_id', $service_id)->get();
            foreach($service_images as $images)
            {
                $filename = public_path().$images->image ?? '';
                if (File::exists($filename))
                {
                    File::delete($filename);
                }
            }

            DB::table('vendor_services')->where('id', $service_id)->delete();
        }
        catch(\Exception $e)
        {
            Log::info("Error deleting services : ". $e);
            session()->flash('add_service_message', 'something went wrong while deleting service, try after sometime');
        }
    }



    public function increaseCount()
    {
        $this->form_count++;
    }

    public function getSubCategory()
    {
        $this->sub_category_array = DB::table('sub_services')->where('service_id', $this->category)->get();
    }
}
