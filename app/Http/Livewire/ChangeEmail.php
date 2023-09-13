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

class ChangeEmail extends Component
{
    use HelperFunctions;

    public $step = 1;
    public $email;
    public $otp;
    public $is_disabled = false;

    protected $rules = [
        'email' => 'required|unique:users',
    ];

    protected $messages = [
        'email.required' => 'Email id is required.',
        'email.unique' => 'Email id must be unique.',
    ];

    public function mount()
    {
        $this->route = url()->previous();
    }

    public function render()
    {
        return view('livewire.change-email');
    }

    public function step1()
    {
        $this->resetErrorBag();
        $this->validate();
        $this->is_disabled = true;

        $email = $this->email;

        try
        {
            DB::table('users')->where('id', auth()->user()->id)->update([ 'email' => $email ]);
            session()->flash('change_email_message', 'Email changed successfully.');
            $this->step++;
        }
        catch(\Exception $e)
        {
            Log::info("error occured in change email: ". $e);
            session()->flash('change_email_message', 'Something went wrong while changing email.');
        }
    }
}
