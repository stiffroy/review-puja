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
        return view('edit',['questions'=>$q]);
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

     Session::put('successMessage','Question successfully added');

        return redirect('questions');
    }



    public function delete(Question $q , $id)
    {
        $q = Question::find($id);
        $q -> delete();
        Session::put('successMessage','Question successfully deleted');
        return redirect('questions');
    }
}
