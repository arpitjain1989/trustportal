<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Vendor;
use DB;
use Redirect;
use App\Http\Traits\HelperFunctions;
use Livewire\WithFileUploads;
use Log;
use Carbon\Carbon;
use Auth;
use File;
use Image;
use Illuminate\Support\Facades\Storage;


class VendorForm extends Component
{
    use HelperFunctions, WithFileUploads;

    public $is_disabled;

    // Form properties
    public $company_name;
    public $year_of_establishment;
    public $company_logo;
    public $number_of_employees;
    public $official_address;
    public $location;
    public $contact_number;
    public $website_url;
    public $contact_person;
    public $official_contact_numer;
    public $company_pan;
    public $gstin;
    public $msme_number;
    public $about_us;
    public $vision;
    public $mission;
    public $other_info;


    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        return view('livewire.vendor-form');
    }

    public function saveDetails()
    {
        $this->resetErrorBag();

        $this->validate([
            'company_name' => 'required',
            'year_of_establishment' => 'required',
            'company_logo' => 'required|mimes:jpeg,bmp,png,gif,svg',
            'number_of_employees' => 'required',
            'official_address' => 'required',
            'location' => 'required',
            'contact_number' => 'required|digits:10',
            'website_url' => 'required',
            'contact_person' => 'required',
            'official_contact_numer' => 'required|digits:10',
            'company_pan' => 'required',
            'gstin' => 'required',
            'msme_number' => 'required',
            // 'about_us' => 'required',
            // 'vision' => 'required',
            // 'mission' => 'required',
            // 'other_info' => 'required',
        ],
        [
            'company_name.required' => 'Company name field is required',
            'year_of_establishment.required' => 'Establishment Year field is required',
            'company_logo.required' => 'Company logo field is required',
            'company_logo.mimes' => 'Image format not supported',
            'number_of_employees.required' => 'Number of employees field is required',
            'official_address.required' => 'Official address field is required',
            'location.required' => 'Location field is required',
            'contact_number.required' => 'Contact number field is required',
            'contact_number.digits' => 'Contact number must be 10 digits',
            'website_url.required' => 'Website url field is required',
            'contact_person.required' => 'Contact person field is required',
            'official_contact_numer.required' => 'Official contact number field is required',
            'official_contact_numer.digits' => 'Official contact number must be 10 digits',
            'company_pan.required' => 'Company PAN field is required',
            'gstin.required' => 'GSTIN field is required',
            'msme_number.required' => 'MSME number field is required',
        ]);

        $this->is_disabled = true;

        $is_vendor_registered = DB::table('vendors')->where('type', 0)->first();

        if($is_vendor_registered)
        {
            session()->flash('vendor_message', 'You are already registered');
            $this->is_disabled = false;
        }
        else
        {

            $vendor_id = auth::guard('vendor')->user()->id;
            $tiestamp = Carbon::now()->toDateTimeString();
            // Storing brand logo of service provider
            $logo = $this->company_logo;
            $filename = "";
            $logo_file_path = "";
            if ($logo)
            {
                $fileName = $logo->getClientOriginalName();
                $fileName = str_replace(" ", "_", $fileName);
                $logo_file_path = $logo->storeAs('upload/images', $fileName, 's3');
            }

            try
            {
                DB::table('vendors')->where('id', $vendor_id)->update(['type'=> '1']);

                DB::table('vendor_details')->insert([
                    'vendor_id' => $vendor_id,
                    'name' => $this->company_name,
                    'address' => $this->official_address,
                    'location' => $this->location,
                    'contact_number' => $this->contact_number,
                    'website' => $this->website_url,
                    'established_year' => $this->year_of_establishment,
                    'logo' => $logo_file_path,
                    'no_of_employee' => $this->number_of_employees,
                    'contact_person' => $this->contact_person,
                    'contact_person_number' => $this->official_contact_numer,
                    'pan' => $this->company_pan,
                    'gstin' => $this->gstin,
                    'msme_number' => $this->msme_number,
                    'about_us' => $this->about_us,
                    'vision' => $this->vision,
                    'mission' => $this->mission,
                    'other_info' => $this->other_info,
                    'created_at' => $tiestamp,
                    'updated_at' => $tiestamp,
                ]);
                session()->flash('vendor_message', 'You are successfully registered as seller');
                $this->is_disabled = false;
                return redirect()->route('vendor.dashboard');
            }
            catch(\Exception $e)
            {
                Log::info("Seller registration error: ".$e);
                session()->flash('vendor_message', 'Something went wrong while registering seller');
                $this->is_disabled = false;
            }
        }

    }
}
