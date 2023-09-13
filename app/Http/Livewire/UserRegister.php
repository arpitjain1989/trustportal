<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\Vendor;
use DB;
use Redirect;
use App\Http\Traits\HelperFunctions;
use Log;
use Carbon\Carbon;
use Auth;

class UserRegister extends Component
{
    use HelperFunctions;

    public $step = 1;
    public $name;
    public $email;
    public $mobile;
    public $otp;
    public $is_disabled = false;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|unique:users',
        'mobile' => 'required|digits:10|unique:users',
    ];

    protected $messages = [
        'name.required' => 'Name is required.',
        'email.required' => 'Email id is required.',
        'email.unique' => 'Email id must be unique.',
        'mobile.required' => 'Mobile number is required.',
        'mobile.digits' => 'Mobile number must be 10 digit.',
        'mobile.unique' => 'Mobile number must be unique.'
    ];

    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        return view('livewire.user-register');
    }

    public function saveStep1()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->is_disabled = true;

        $name = $this->name;
        $email = $this->email;
        $mobile = $this->mobile;

        $check_if_user = DB::table('users')->where('mobile', $mobile)->first();
        $check_if_vendor = Vendor::where('mobile', $mobile)->first();

        if($check_if_user || $check_if_vendor)
        {
            session()->flash('register_message', 'This number is already registered');
            $this->is_disabled = false;
        }
        else
        {
            $this->sendLoginOtp($mobile);
            $this->step++;
            $this->is_disabled = false;
            session()->flash('register_message', 'OTP sent successfully !');
        }
    }

    public function saveStep2()
    {
        $this->resetErrorBag();
        $this->validate([
            'otp'=>'required|digits:4'
        ]);

        $entered_otp = $this->otp;
        $mobile = $this->mobile;
        $random_password = mt_rand(10000000, 99999999);
        $session_name = 'register_message';
        $timestamp = Carbon::now()->toDateTimeString();

        $response = $this->livewireVerifyOtp($entered_otp, $mobile, $session_name);

        if($response == 1)
        {
            try
            {
                $user_id = DB::table('users')->insertGetId([
                            'name'=> $this->name,
                            'email'=> $this->email,
                            'mobile'=> $this->mobile,
                            'password'=> Hash::make($random_password),
                            'created_at'=> $timestamp,
                            'updated_at'=> $timestamp,
                        ]);
                Auth::loginUsingId($user_id);
                $this->step++;
                $this->emitTo('header', '$refresh');
            }
            catch(\Exception $e)
            {
                Log::info(" User registration error.".$e);
                session()->flash('register_message', 'Mobile / Email already exists');
            }
        }
    }

    public function step3()
    {
        // return redirect()->intended();
    }
}
