<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\Social;
use App\Models\Users\User;
use Auth;


class SocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $name = Auth::user()->name;
        $data['pageHeading'] = 'Social Media Management'." - ".$name;;
        $data['title'] = 'Social Media Management';
        $user_id = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['post_url'] = route('user.social.update');
        $data['data_value'] = Social::where('business_id',$user_id)->first();
        return view('user.pages.social.index', $data);
    }

    public function update(Request $request){
       $user_id = Auth::user()->id;
       $social = Social::where('business_id',$user_id)->first();
       if($social){
        $social->facebook = $request->facebook;
        $social->instagram = $request->instagram;
        $social->linkedin = $request->linkedin;
        $social->twitter = $request->twitter;
        $social->business_id = $user_id;
        $social->save();
       } else {
        $social = new Social;
        $social->facebook = $request->facebook;
        $social->instagram = $request->instagram;
        $social->linkedin = $request->linkedin;
        $social->twitter = $request->twitter;
        $social->business_id = $user_id;
        $social->save();
       }
       return redirect(route('user.social.index'));
    }
}
