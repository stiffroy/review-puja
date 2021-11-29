<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function add(Request $request)
    {
        $validation = $request->validate([
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required'
        ]);
        $q = new Question;
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();

        Session::put('successMessage','Question successfully added');

        return redirect('questions');
    }

    public function show()
    {
        $qs = Question::all();
        return view('questions',['questions'=>$qs]);
    }

    public function edit(Question $q , $id)
    {
        $q = Question::find($id);
        return view('edit',['q'=>$q]);
    }

    public function update(Request $request, Question $q, $id)
    {
        $validation = $request->validate([
            'question'=>'required',
            'opa'=>'required',
            'opb'=>'required',
            'opc'=>'required',
            'opd'=>'required',
            'ans'=>'required'
        ]);
        $q = Question::find($id);
        $q->question = $request->question;
        $q->a = $request->opa;
        $q->b = $request->opb;
        $q->c = $request->opc;
        $q->d = $request->opd;
        $q->ans = $request->ans;

        $q->save();

        Session::put('successMessage','Question successfully updated');

        return redirect('questions');
    }



    public function delete(Question $q , $id)
    {
        $q = Question::find($id);
        $q -> delete();
        Session::put('successMessage','Question successfully deleted');
        return redirect('questions');
    }

    public function startquiz()
    {
        // Session::put('nextq','1');
        //  Session::put('wrongans','0');
        //  Session::put('correctans','0');
        // $wrongans=0;
        // $correctans=0;
        $q = Question::all();
        return view('exampage',['qs'=>$q]);
    }
    public function submitans(Request $request)
    {
        // $nextq = Session::get('nextq');
        // $worngans = Session::get('wrongans');
        // $correctans = Session::get('correctans');
        $wrongans=0;
        $correctans=0;
        
        $qs = Question::all();
       // $i=0;
        //$j=$qs->count();

        $answers = $request->get('ans');
        $dbans = $request->get('dbans');

         foreach ($answers as $id => $answer)
         {
//            $validation = $request->validate([
//                'ans'=>'required',
//                'dbans'=>'required',
//            ]);
            // $nextq+=1;
            
            if($answer == $dbans[$id])
            {
                $correctans+=1;
            }
            else
            {
                $wrongans+=1;
            }
             
            // $correctans=$correctans;
            // $wrongans=$wrongans;
            // Session::put('nextq',$nextq);
            // Session::put('wrongans',$worngans);
            // Session::put('correctans',$correctans);
            
        }

         // return should never be in a for loop
         return view('end',['c'=>$correctans,'w'=>$wrongans]);
        

    //     $i=0;
    //     $questions = Question::all();
    //     foreach($questions as $question)
    //     {
    //         $i++;
    //         if($questions->count() < $nextq)
    //         {
    //             return view('end');
    //         }
    //         if($i==$nextq)
    //          {
    //             return view('exampage',['question'=>$questions]);
    //          }
    //    }
    }
}
