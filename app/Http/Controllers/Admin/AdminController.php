<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
// use App\Models\ClassModule;
// use App\Models\ClassSection;
// use App\Models\Role;
// use App\Models\Teacher;
// use App\Models\member;
use App\Models\User;
use App\Models\feed;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use DB;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    use AuthenticatesUsers;
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|exists:admins,email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Please enter email',
                'email.exists' => 'Entered email does not exists',
                'password.required' => 'Please enter password',
            ]
        );

        if ($validator->passes()) {
            $username = $request->email;
            $password = $request->password;
            $remember_me = $request->has('remember_me') ? true : false;

            try {

                if (auth()->guard('admin')->attempt(['email' => $username, 'password' => $password], $remember_me)) {
                    return response()->json(['success' => 'Login successful']);
                } else {
                    return response()->json(['error2' => 'Invalid username or password']);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                Log::info("Admin login error:" . $e);
                return response()->json(['error2' => 'Something went wrong while validating your credentials!']);
            }
        } else {
            return response()->json(['error' => $validator->errors()]);
        }
        // return $request->all();

        // $credentials = $request->only('email', 'password');
        // if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
        //     $user = Admin::where('email', $request->email)->first();
        //     Auth::guard('admin')->login($user);
        //     return redirect()->route('admin.dashboard');
        // }

        // return redirect()->route('admin.login')->with('status', 'Failed to process login');
    }

    // public function logout(Request $request)
    // {
    //     if(Auth::guard('admin')->logout())
    //     {
    //         return redirect()->route('admin.login')->with('status', 'Logout Successfully!');
    //     }
    // }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson() ? new JsonResponse([], 204) : redirect('/');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->route('admin.dashboard');
    }

    protected function loggedOut(Request $request)
    {
        return redirect()->route('admin.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function home()
    {
        // $teachers = Teacher::with('role')->get();
        // return $teachers;
        return view('admin.home');
    }

    public function feed()
    {
  
        $records = feed::orderBy('id', 'desc')->paginate(12);
        return view('admin.feed', compact('records'));
    }
    
    public function create_feed()
    {
  

        return view('admin.create-feed');
    }

    public function member_list()
    {
        $records = User::orderBy('id', 'desc')->paginate(15); // Order by 'created_at' column in descending order, with 10 records per page


        return view('admin.member-list', compact('records'));
    }
    public function getmemberbyid(Request $request)
    {
        // echo $request->id;

        $records = User::where('id',$request->id)->first();
  
        

        return  $records;
       
    }


public function InsertMember(Request $request)
{


      $request-> validate ([
"name"=>"required",
"mobile"=>"required"
    ]);

$member = new User();
 $member-> name = $request->name;
 $member-> mobile = $request->mobile;
 $result = $member->save();

 if ($result) {
   return redirect('/admin/member-list')->with('succes', 'Recorde Inserted');
 }else{
   return back()->with('fail',"Somthing Went Wrong ");
}
   
   

}

public function deleteMember  (Request $request,$id)
{
$modal=User::find($id);
$result = $modal->delete($id);
if ($result) {
 return back()->with('succes',' Record deleted...!! ');
}else{
 return back()->with('fail',' Record not deleted failed please try agin ');

}
}

    public function updaterole(Request $request)
    {
        $role = Role::updateOrCreate(
            ['teacher_id' => $request->row_id],
            // 'superapprover' => ($request->srole)?1:0,
            ['approver' => $request->role]
        );
        return true;
    }

    public function supdaterole(Request $request)
    {
        // return $request->role;
        $role = Role::updateOrCreate(
            ['teacher_id' => $request->row_id],
            ['superapprover' => $request->role],
            // ['approver' => ($request->arole)?1:0]
        );
        return true;
    }

    public function moduleview()
    {
        $modules = ClassModule::all();
        return view('admin.moduleview', compact('modules'));
    }

    public function addsections($id)
    {
        $module = ClassModule::find($id);
        $sections = ClassSection::where('class_id', $id)->get();
        return view('admin.addsections', compact('module','sections'));
    }

    public function postsections(Request $request)
    {
        $sections = ClassSection::where('class_id',$request->module_id)->get();
        if ($sections) {
            ClassSection::where('class_id',$request->module_id)->delete();
        }
        foreach ($request->sections as $key => $value) {
            $section =new ClassSection();
            $section->class_id = $request->module_id;
            $section->title = $value['title'];
            $section->content = $value['content'];
            $section->order = $value['order'];
            $section->save();
        }
        // return $request;
        return redirect()->back()->with('success', 'Sections saved !');
    }
}
