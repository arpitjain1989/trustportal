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

class UserLogin extends Component
{
    use HelperFunctions;

    public $step = 1;
    public $mobile;
    public $otp;
    public $is_disabled = false;

    protected $rules = [
        'mobile' => 'required|digits:10',
    ];

    protected $messages = [
        'mobile.required' => 'Mobile number is required.',
        'mobile.digits' => 'Mobile number must be 10 digit.',
    ];

    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        return view('livewire.user-login');
    }

    public function step1()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->is_disabled = true;

        $mobile = $this->mobile;
        // dd($mobile);
        $check_if_user = User::where('mobile', $mobile)->first();
        $check_if_vendor = 0;
        if($check_if_user)
        {
            if($check_if_user->active_status == 1)
            {
                $is_otp_send = $this->sendLoginOtp($mobile);
                if($is_otp_send)
                {
                    session()->flash('login_message', 'OTP sent successfully !');
                    $this->step++;
                    $this->is_disabled = false;
                }
                else
                {
                    session()->flash('login_message', 'Something went wrong while sending OTP');
                    $this->is_disabled = false;
                }
            }
            else
            {
                session()->flash('login_message', 'Your number is blocked');
                $this->is_disabled = false;
            }
        }

        elseif( $check_if_vendor = DB::table('vendors')->where('mobile', $mobile)->first() )
        {
            if($check_if_vendor->active_status == 1)
            {
                $this->sendLoginOtp($mobile);
                session()->flash('login_message', 'OTP sent successfully !');
                $this->step++;
                $this->is_disabled = false;
            }
            else
            {
                session()->flash('login_message', 'Your number is blocked');
                $this->is_disabled = false;
            }
        }
        elseif( !$check_if_vendor && !$check_if_user)
        {
            session()->flash('login_message', 'Mobile number does not exist');
            $this->is_disabled = false;
        }

    }


    public function step2()
    {
        // dd($this->otp);
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
        $session_name = 'login_message';
        // $random_password = mt_rand(10000000, 99999999);
        // $timestamp = Carbon::now()->toDateTimeString();

        $response = $this->livewireVerifyOtp($entered_otp, $mobile, $session_name);

        if($response == 1)
        {
            try
            {
                $user = User::where('mobile', $mobile)->first();
                if($user)
                {
                    Auth::loginUsingId($user->id);
                    $this->step++;
                    $this->emitTo('header', '$refresh');
                    $this->emitTo('review', '$refresh');
                }
                else
                {
                    $vendor = Vendor::where('mobile', $mobile)->first();
                    if($vendor)
                    {
                        // $new_password = mt_rand(10000000, 99999999);
                        // $hashed_password = Hash::make($new_password);
                        // DB::table('vendors')->where('mobile', $mobile)->update(['password'=> $hashed_password]);
                        // Auth::guard('vendor')->attempt(array('mobile' => $vendor->mobile, 'password' => $new_password));
                        Auth::guard('vendor')->loginUsingId($vendor->id);
                        // Auth::guard('vendor')->login($vendor);
                        $this->step++;
                        $this->emitTo('header', '$refresh');
                        $this->emitTo('review', '$refresh');
                    }
                    else
                    {
                        session()->flash('login_message', 'Mobile number does not exists');
                    }
                }
            }
            catch(\Exception $e)
            {
                Log::info(" User login error.".$e);
                session()->flash('login_message', 'Unable to complete request at this moment');
            }
        }
    }

    public function step3()
    {
        // return redirect()->back();
        // return redirect()->intended();
    }


}
