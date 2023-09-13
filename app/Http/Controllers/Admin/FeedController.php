<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\feed;

class FeedController extends Controller
{
  public function create_feed_process(Request $request)
  {
//    dd($request->all());



$request-> validate ([
    "image"=>"required",
    "title"=>"required"
]);

// $img =  $request->file('image')->store('uploads');
if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $name = time() . '.' .$extension;
            $request->file('image')->move("upload/feed/", $name);
}
    $feed = new feed();
    $feed-> image = $name;
     $feed-> title = $request->title;
     $result = $feed->save();
    
     if ($result) {
       return redirect('/admin/feed')->with('succes', 'Recorde Inserted');
     }else{
       return back()->with('fail',"Somthing Went Wrong ");
    }
       
  }


public function edit_feed($id)
{
    $records =feed::find($id);
    return view('admin.edit-feed',compact('records'));
}

public function edit_feed_process(Request $request, $id)
{
    $feed = Feed::find($id); 

    $feed->title = $request->title;

    if ($request->hasFile('image')) {

        $dest = 'upload/feed/' . $feed->image; 
        if (File::exists($dest)) {
            File::delete($dest);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $name = time() . '.' . $extension;
        $request->file('image')->move("upload/feed/", $name);
        $feed->image = $name;
    }

    $result = $feed->update();

    if ($result) {
        return redirect('/admin/feed')->with('succes', 'Record Updated'); 
    } else {
        return back()->with('fail', "Something Went Wrong");
    }
}

 public function delete_feed(Request $request,$id )
 {
    $feed = Feed::find($id); 

  $dest = 'upload/feed/' . $feed->image; 
        if (File::exists($dest)) {
            File::delete($dest);
        }
        $result =  $feed->delete();
      

    if ($result) {
        return redirect('/admin/feed')->with('succes', 'Record Deleted'); 
    } else {
        return back()->with('fail', "Something Went Wrong");
    }
 }

}
