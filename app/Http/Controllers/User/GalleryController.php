<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\Gallery;
use App\Models\Users\Profile;
use App\Models\Users\User;
use Auth;


class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $name = Auth::user()->name;
        $data['pageHeading'] = 'Gallery Management'." - ".$name;;
        $data['title'] = 'Gallery Management';
        $user_id = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['post_url'] = route('user.gallery.update');
        $data['data_value'] = Gallery::where('business_id',$user_id)->first();
        return view('user.pages.gallery.index', $data);
    }

    public function update(Request $request){
       $user_id = Auth::user()->id;
       $gallery = Gallery::where('business_id',$user_id)->first();
       if($gallery){
        if($request->has('image1')) {
            $file = $request->file('image1');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img1";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/gallery/';
            $file->move($destination_path, $filename);
            $gallery->image1 = $filename;
        }
        }
        if($request->has('image2')) {
            $file = $request->file('image2');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img2";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image2 = $filename;
         }
        }
        if($request->has('image3')) {
            $file = $request->file('image3');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img3";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image3 = $filename;
         }
        }
        if($request->has('image4')) {
            $file = $request->file('image4');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img4";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image4 = $filename;
         }
        }
        if($request->has('image5')) {
            $file = $request->file('image5');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img5";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image5 = $filename;
         }
        }
        $user->save();
       } else {
        $gallery = new Gallery;
        $gallery->business_id = $user_id;
        if($request->has('image1')) {
            $file = $request->file('image1');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img1";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/gallery/';
            $file->move($destination_path, $filename);
            $gallery->image1 = $filename;
        }
        }
        if($request->has('image2')) {
            $file = $request->file('image2');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img2";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image2 = $filename;
         }
        }
        if($request->has('image3')) {
            $file = $request->file('image3');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img3";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image3 = $filename;
         }
        }
        if($request->has('image4')) {
            $file = $request->file('image4');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img4";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image4 = $filename;
         }
        }
        if($request->has('image5')) {
            $file = $request->file('image5');
            $ext="";
            $ext  = strtolower($file->getClientOriginalExtension());
        if($ext == "png" || $ext == "jpg" || $ext == "jpeg" )
        {
            $title = "img5";
            $filename = $user_id.$title.".".$ext;
            $destination_path = 'uploads/cover/';
            $file->move($destination_path, $filename);
            $gallery->image5 = $filename;
         }
        }
        $gallery->save();
       }
       return redirect(route('user.gallery.index'));
    }
}
