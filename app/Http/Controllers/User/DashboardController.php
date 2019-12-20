<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\Set;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $data['pageHeading'] = 'Sets';
        $data['title'] = 'Quiz Nepal';
        $data['sets'] = DB::table('sets')->get();
        return view('user.pages.dashboard', $data);
    }

    public function addSet(Request $request, $id=0) {
        $data['data_value'] = DB::table('sets')->where('id', $id)->first();
        $data['title'] = ($id == 0) ? "Add" : "Edit";
        $data['pageHeading'] = ($id == 0) ? "Add Sets" : "Edit Sets";
        $data['post_url'] =  route('admin.sets.update', ['id' => $id]);
        return view('user.pages.set.add', $data);
    }

    public function updateSet(Request $request, $id=0) {
        $set = ($id == 0) ? new Set : Set::find($id);
        $set->name = $request->name;
        $set->status = $request->status;
        $set->save();
        return redirect(route('user.dashboard'));
    }

    public function addQuestion(Request $request, $id=0) {
        $data['pageHeading'] = 'Add Question';
        $data['title'] = 'Add Question';
        $data['post_url'] =  route('admin.sets.updatequestion', ['setId' => $request->setId]);
        return view('user.pages.set.question', $data);
    }

    public function updateQuestion(Request $request) {
        $set_id = $request->setId;
        $checkIfAddorEdit = DB::table('questions')->where('set_id', $set_id)->get();
        if(count($checkIfAddorEdit) > 0) {
           // Edit
            echo "edit";
            die();
        } else {
            // add
             foreach($request->question as $key=>$val)
            {
                if(!empty($val)) {
                    DB::table('questions')
                    ->insert([
                        'set_id' => $set_id,
                        'question_no' => $request->question_no[$key],
                        'question' => $request->question[$key],
                        'option_1' => $request->option1[$key],
                        'option_2' => $request->option2[$key],
                        'option_3' => $request->option3[$key],
                        'option_4' => $request->option4[$key],
                        'answer' => $request->answer.$request->question_no[$key],
                        'created_at' =>date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        
        return redirect(route('user.dashboard'));

    }
}
