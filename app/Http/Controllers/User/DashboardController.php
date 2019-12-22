<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\Set;
use App\Models\Users\Token;
use App\Models\Users\Submission;
use Carbon\Carbon;
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
        $questions = DB::table('questions')->where('set_id', $request->setId)->get();
        if(count($questions) > 0) {
            $data['data_value'] = $questions;
        } else {
            $data['data_value'] = range(1,20);
        }
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
                        'answer' => $request->answer[$key],
                        'created_at' =>date('Y-m-d H:i:s')
                    ]);
                }
            }
        }
        
        return redirect(route('user.dashboard'));

    }

    public function testSet(Request $request) {
        $set = $request->setId;
        $qno = $request->qno;
        $data['question'] = DB::table('questions')->where('set_id',$set)->where('question_no', $qno)->first();
        return view('user.pages.studentquestion', $data);
    }

    public function generateToken(Request $request) {
        $set = $request->setId;
        $token = new Token;
        $token->token = str_random(32);
        $token->set_id = $set;
        $current = Carbon::now();
        $token->expiry = $current->addHours()->addMinutes();
        $token->save();
    }

    public function submission(Request $request) {
        if($request->userid) {
            session(['userid' => $request->userid]);
        }
        $question_no = $request->question_no;
        $set_id = $request->set_id;
        $submission = new Submission;
        $submission->userid = session('userid');;
        $submission->set_id = $set_id;
        $submission->question_no = $question_no;
        $submission->submitted_option = $request->option;

        $questionDetail = DB::table('questions')->where('set_id', $set_id)->where('question_no', $question_no)->first();
        $isCorrectValidator = $questionDetail->answer == $request->option ? 1 : 0;
        $submission->is_correct = $isCorrectValidator;
        $submission->save();

        $total_questions = DB::table('questions')->where('set_id',$set_id)->count('question_no');
        if($total_questions == $question_no) {
            $data['total_correct_answer'] = DB::table('submissions')->where('userid',session('userid'))->where('is_correct','1')->count('is_correct');
            return view('user.pages.studentsubmission', $data);
        } else {
            $next_question = $question_no + 1;
            $redirect = '/test/'.$set_id.'/'.$next_question;
            return redirect($redirect);
        }     

    }
}
