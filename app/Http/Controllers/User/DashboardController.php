<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['pageHeading'] = 'Questions';
        $data['title'] = 'Quiz Nepal';
        $data['sets'] = DB::table('sets')->get();
        return view('user.pages.dashboard', $data);
    }
}
