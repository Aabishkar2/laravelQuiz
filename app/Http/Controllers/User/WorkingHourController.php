<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\WorkingHour;
use App\Models\Users\User;
use Auth;


class WorkingHourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $name = Auth::user()->name;
        $data['pageHeading'] = 'Working Hours Management'." - ".$name;
        $data['title'] = 'Working Hours Management';
        $user_id = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['post_url'] = route('user.working_hour.update');
        $data['data_value'] = WorkingHour::where('business_id',$user_id)->first();
        return view('user.pages.working_hour.index', $data);
    }

    public function update(Request $request){
       $user_id = Auth::user()->id;
       $working_hour = WorkingHour::where('business_id',$user_id)->first();
       if($working_hour){
        $working_hour->business_id = $user_id;
        $working_hour->sunday_open = $request->open_sunday;
        $working_hour->monday_open = $request->open_monday;
        $working_hour->tuesday_open = $request->open_tuesday;
        $working_hour->wednesday_open = $request->open_wednesday;
        $working_hour->thursday_open = $request->open_thursday;
        $working_hour->friday_open = $request->open_friday;
        $working_hour->saturday_open = $request->open_saturday;
        $working_hour->sunday_close = $request->close_sunday;
        $working_hour->monday_close = $request->close_monday;
        $working_hour->tuesday_close = $request->close_tuesday;
        $working_hour->wednesday_close = $request->close_wednesday;
        $working_hour->thursday_close = $request->close_thursday;
        $working_hour->friday_close = $request->close_friday;
        $working_hour->saturday_close = $request->close_saturday;
        $working_hour->sun_radio = $request->sun_check;
        $working_hour->mon_radio = $request->mon_check;
        $working_hour->tue_radio = $request->tue_check;
        $working_hour->wed_radio = $request->wed_check;
        $working_hour->thu_radio = $request->thu_check;
        $working_hour->fri_radio = $request->fri_check;
        $working_hour->sat_radio = $request->sat_check;
        $working_hour->save();
       } else {
        $working_hour = new WorkingHour;
        $working_hour->business_id = $user_id;
        $working_hour->sunday_open = $request->open_sunday;
        $working_hour->monday_open = $request->open_monday;
        $working_hour->tuesday_open = $request->open_tuesday;
        $working_hour->wednesday_open = $request->open_wednesday;
        $working_hour->thursday_open = $request->open_thursday;
        $working_hour->friday_open = $request->open_friday;
        $working_hour->saturday_open = $request->open_saturday;
        $working_hour->sunday_close = $request->close_sunday;
        $working_hour->monday_close = $request->close_monday;
        $working_hour->tuesday_close = $request->close_tuesday;
        $working_hour->wednesday_close = $request->close_wednesday;
        $working_hour->thursday_close = $request->close_thursday;
        $working_hour->friday_close = $request->close_friday;
        $working_hour->saturday_close = $request->close_saturday;
        $working_hour->sun_radio = $request->sun_check;
        $working_hour->mon_radio = $request->mon_check;
        $working_hour->tue_radio = $request->tue_check;
        $working_hour->wed_radio = $request->wed_check;
        $working_hour->thu_radio = $request->thu_check;
        $working_hour->fri_radio = $request->fri_check;
        $working_hour->sat_radio = $request->sat_check;
        $working_hour->save();
       }
       return redirect(route('user.working_hour.index'));
    }
}
