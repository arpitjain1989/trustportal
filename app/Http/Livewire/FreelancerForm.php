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

class FreelancerForm extends Component
{
    use HelperFunctions, WithFileUploads;

    public $is_disabled;

    // Form properties
    public $name;
    public $official_address;
    public $location;
    public $contact_number;
    public $website_url;
    public $other_info;


    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        return view('livewire.freelancer-form');
    }

    public function saveFreelancerDetails()
    {
        $this->resetErrorBag();

        $this->validate([
            'name' => 'required',
            'official_address' => 'required',
            'location' => 'required',
            'contact_number' => 'required|digits:10',
            'website_url' => 'required',
        ],
        [
            'name.required' => 'Company name field is required',
            'official_address.required' => 'Official address field is required',
            'location.required' => 'Location field is required',
            'contact_number.required' => 'Contact number field is required',
            'contact_number.digits' => 'Contact number must be 10 digits',
            'website_url.required' => 'Website url field is required',
        ]);

        $this->is_disabled = true;

        $is_vendor_registered = DB::table('vendors')->where('type', 0)->first();

        if($is_vendor_registered)
        {
            session()->flash('freelancer_message', 'You are already registered');
            $this->is_disabled = false;
        }
        else
        {
            $vendor_id = auth::guard('vendor')->user()->id;
            $timestamp = Carbon::now()->toDateTimeString();
            try
            {
                DB::table('vendors')->where('id', $vendor_id)->update(['type'=> '2']);

                DB::table('vendor_details')->insert([
                    'name' => $this->name,
                    'address' => $this->official_address,
                    'location' => $this->location,
                    'contact_number' => $this->contact_number,
                    'website' => $this->website_url,
                    'other_info' => $this->other_info,
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ]);
                session()->flash('freelancer_message', 'You are successfully registered as seller');
                $this->is_disabled = false;
                return redirect()->route('vendor.dashboard');
            }
            catch(\Exception $e)
            {
                Log::info("Seller registration error: ".$e);
                session()->flash('freelancer_message', 'Something went wrong while registering seller');
                $this->is_disabled = false;
            }
        }
    }


}
