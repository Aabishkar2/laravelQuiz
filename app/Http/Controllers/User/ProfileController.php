<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\Profile;
use App\Models\Users\User;
use Auth;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $name = Auth::user()->name;
        $data['pageHeading'] = 'Profile Management'." - ".$name;;
        $data['title'] = 'Profile Management';
        $user_id = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['email'] = Auth::user()->email;
        $data['post_url'] = route('user.profile.update');
        $data['data_value'] = Profile::where('business_id',$user_id)->first();
        return view('user.pages.profile.index', $data);
    }

    public function update(Request $request){
       $user_id = Auth::user()->id;
       $profile = Profile::where('business_id',$user_id)->first();
       if($profile){
        $profile->full_name = $request->name;
        $profile->business_id = $user_id;
        $profile->tagline = $request->tagline;
        $profile->category = $request->category;
        $profile->company_type = $request->company_type;
        $profile->company_size = $request->company_size;
        $profile->year_founded = $request->year_founded;
        $profile->operating_status = $request->operating_status;
        $profile->description = $request->description;
        $user = User::find($user_id);
        $user->name = $request->name;
        if($request->has('logo')) {
            $file = $request->file('logo');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $filename = $user_id.".".$ext;
            $destination_path = 'uploads/logo/';
            $file->move($destination_path, $filename);
            $profile->logo = $filename;
         }
        }
        if($request->has('cover')) {
            $file = $request->file('cover');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $filename = $user_id.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $profile->cover = $filename;
         }
        }
        $user->save();
        $profile->save();
       } else {
        $profile = new Profile;
        $profile->full_name = $request->name;
        $profile->business_id = $user_id;
        $profile->tagline = $request->tagline;
        $profile->category = $request->category;
        $profile->company_type = $request->company_type;
        $profile->company_size = $request->company_size;
        $profile->year_founded = $request->year_founded;
        $profile->operating_status = $request->operating_status;
        $profile->description = $request->description;
        if($request->has('logo')) {
            $file = $request->file('logo');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $filename = $user_id.".".$ext;
            $destination_path = 'uploads/logo/';
            $file->move($destination_path, $filename);
            $profile->logo = $filename;
         }
        }
        if($request->has('cover')) {
            $file = $request->file('cover');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $filename = $user_id.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $profile->cover = $filename;
         }
        }
        $profile->save();
       }
       return redirect(route('user.profile.index'));
    }
}
