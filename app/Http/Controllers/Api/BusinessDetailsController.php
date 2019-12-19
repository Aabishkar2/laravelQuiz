<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Session;
use App\Models\Users\Profile;
use App\Models\Users\Location;
use App\Models\Users\Gallery;
use App\Models\Users\Social;
use App\Models\Users\WorkingHour;
use App\Models\Users\ContactDetail;
use App\Models\Users\ContactPerson;





class BusinessDetailsController extends ApiController
{

    public function getBusinessDetails($searched_object){
        $query = Profile::where('full_name', 'LIKE', '%' .$searched_object.'%')->get();
        if($query->count() > 0)
        {
            return response([
                      'result' => $query
                  ]);
        } else {
            return response([
                'result' => 'No data found'
            ]);
        }

    }

    public function getAllBusinessDetails($object_id){
        $info = Profile::find($object_id);
        if($info)
        {
            $social = Social::where('business_id',$info->business_id)->first();
            $location = Location::where('business_id',$info->business_id)->first();
            $contact = ContactDetail::where('business_id',$info->business_id)->first();
            $contact_person = ContactPerson::where('business_id',$info->business_id)->first();
            $working_hour = WorkingHour::where('business_id',$info->business_id)->first();
            $gallery = Gallery::where('business_id',$info->business_id)->first();
            return response([
                      'info' => $info,
                      'social' => $social,
                      'location' => $location,
                      'contact' => $contact,
                      'contact_person' => $contact_person,
                      'working_hour' => $working_hour,
                      'gallery' => $gallery
                  ]);
        } else {
            return response([
                'result' => 'No data found'
            ]);
        }

    }

}
