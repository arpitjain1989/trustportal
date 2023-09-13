<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Redirect;
use App\Http\Traits\HelperFunctions;
use Log;
use Auth;

class Review extends Component
{

    public $show_review = 0;
    public $vendor_service_id;
    public $limit = 3;

    public $rating;
    public $review;

    protected $listeners = [
        '$refresh'
    ];

    public function render()
    {
        $reviews = DB::table('reviews')->where('vendor_service_id', $this->vendor_service_id)->limit($this->limit)->paginate(3);

        return view('livewire.review')->with('reviews', $reviews);
    }

    public function postReview($user_id, $type)
    {
        $this->resetErrorBag();
        $this->validate([
            'rating'=>'required',
            'review'=>'required'
        ],
        [
            'rating.required'=> 'Rating filed is required',
            'review.required'=> 'Review field is required',
        ]);
    }
}
