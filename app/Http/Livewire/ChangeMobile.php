<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\Vendor;
use DB;
use Redirect;
use App\Http\Traits\HelperFunctions;
use Brick\Math\BigInteger;
use Log;
use Auth;

class ChangeMobile extends Component
{

    use HelperFunctions;

    public $step = 1;
    public $mobile;
    public $otp;
    public $is_disabled = false;

    protected $rules = [
        'mobile' => 'required|digits:10|unique:users',
    ];

    protected $messages = [
        'mobile.required' => 'Mobile number is required.',
        'mobile.digits' => 'Mobile number must be 10 digit.',
        'mobile.unique' => 'Mobile number must be unique.',
    ];

    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        return view('livewire.change-mobile');
    }

    public function step1()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->is_disabled = true;

        $mobile = $this->mobile;
        $check_if_vendor = vendor::where('mobile', $mobile)->first();

        if($check_if_vendor)
        {
            session()->flash('change_mobile_message', 'This number is already registered with another user');
            $this->is_disabled = false;
        }
        else
        {
            // if($check_if_vendor->active_status == 1)
            // {
            $is_otp_send = $this->sendLoginOtp($mobile);
            if($is_otp_send)
            {
                session()->flash('change_mobile_message', 'OTP sent successfully !');
                $this->step++;
                $this->is_disabled = false;
            }
            else
            {
                session()->flash('change_mobile_message', 'Something went wrong while sending OTP');
                $this->is_disabled = false;
            }
            // }
            // else
            // {
            //     session()->flash('change_mobile_message', 'Your number is blocked');
            //     $this->is_disabled = false;
            // }
        }
    }


    public function step2()
    {
        $this->resetErrorBag();
        $this->validate([
            'otp'=>'required|digits:4'
        ],
        [
            'otp.required'=> 'OTP field is required',
            'otp.digits'=> 'OTP must have 4 digits'
        ]);

        $entered_otp = $this->otp;
        $mobile = $this->mobile;
        $session_name = 'change_mobile_message';

        $response = $this->livewireVerifyOtp($entered_otp, $mobile, $session_name);

        if($response == 1)
        {
            try
            {
                // DB::beginTransaction();
                DB::table('users')->where('id', auth()->user()->id)->update(['mobile'=> $mobile]);
                $this->step++;
            }
            catch(\Exception $e)
            {
                Log::info(" User change mobile error.".$e);
                session()->flash('change_mobile_message', 'Unable to complete request at this moment');
            }
        }
    }
}
