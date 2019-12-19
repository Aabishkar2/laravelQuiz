<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\Location;
use App\Models\Users\ContactPerson;
use App\Models\Users\ContactDetail;
use App\Models\Users\User;
use DB;

use Auth;


class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $name = Auth::user()->name;
        $data['pageHeading'] = "Business Details Management"." - ".$name;
        $data['title'] = 'Details Management';
        $user_id = Auth::user()->id;
        $data['location'] = Location::where('business_id',$user_id)->first();
        $data['district'] = DB::table('districts')->get();
        $data['city'] = DB::table('cities')->get();
        $data['area'] = DB::table('areas')->get();
        $data['post_url'] = route('user.about.update');
        $data['contact_detail'] = ContactDetail::where('business_id',$user_id)->first();
        $data['contact_person'] = ContactPerson::where('business_id',$user_id)->first();
        return view('user.pages.about.index', $data);
    }

    public function update(Request $request){
       $user_id = Auth::user()->id;
       $location = Location::where('business_id',$user_id)->first();
       if($location){
        $location->address_title = $request->address_title;
        $location->district = $request->district;
        $location->city = $request->city;
        $location->business_id = $user_id;
        $location->area = $request->area;
        $location->house_number = $request->house_number;
        $location->landmark = $request->landmark;
        $location->street_address = $request->street_address;
        $location->po_box = $request->po_box;
        $location->save();
       } else {
        $location = new Location;
        $location->address_title = $request->address_title;
        $location->district = $request->district;
        $location->city = $request->city;
        $location->business_id = $user_id;
        $location->area = $request->area;
        $location->house_number = $request->house_number;
        $location->landmark = $request->landmark;
        $location->street_address = $request->street_address;
        $location->po_box = $request->po_box;
        $location->save();
       }
       $contact = ContactDetail::where('business_id',$user_id)->first();
       if($contact){
        $contact->landline_1 = $request->landline_1;
        $contact->landline_2 = $request->landline_2;
        $contact->email1 = $request->email_1;
        $contact->email2 = $request->email_2;
        $contact->business_id = $user_id;
        $contact->toll_free = $request->toll_free;
        $contact->fax = $request->fax;
        $contact->website = $request->website;
        $contact->save();
       } else {
        $contact = new ContactDetail;
        $contact->landline_1 = $request->landline_1;
        $contact->landline_2 = $request->landline_2;
        $contact->email1 = $request->email_1;
        $contact->email2 = $request->email_2;
        $contact->business_id = $user_id;
        $contact->toll_free = $request->toll_free;
        $contact->fax = $request->fax;
        $contact->website = $request->website;
        $contact->save();
       }
       $person = ContactPerson::where('business_id',$user_id)->first();
       if($person){
        $person->full_name = $request->full_name;
        $person->designation = $request->designation;
        $person->email = $request->email;
        $person->mobile = $request->mobile;
        $person->business_id = $user_id;
        $person->save();
       } else {
        $person = new ContactPerson;
        $person->full_name = $request->full_name;
        $person->designation = $request->designation;
        $person->email = $request->email;
        $person->mobile = $request->mobile;
        $person->business_id = $user_id;
        $person->save();
       }
       return redirect(route('user.about.index'));
    }
}
