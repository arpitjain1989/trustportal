<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;
use App\Models\User;
use App\Models\Vendor;
use DB;
use Redirect;
use Brick\Math\BigInteger;
use Log;
use Auth;

class AddServiceForm extends Component
{

    public $form_count = 2;
    public $loop = 1;
    public $email;
    public $otp;
    public $is_disabled = false;
    public $category;
    public $sub_category;

    public function mount()
    {
        $this->category = DB::table('services')->get();
        $this->sub_category = DB::table('sub_services')->get();
    }

    public function render()
    {
        return view('livewire.add-service-form');
    }

    // public function updatedCategory()
    // {
    //     $sub_category = DB::table('sub_services')->where('service_id', $this->category)->get();
    // }

    public function getSubCategory()
    {
        $this->sub_category = DB::table('sub_services')->where('service_id', $this->category)->get();
        $this->category = DB::table('services')->get();
    }
}
