<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    //
    public function home()
    {
       $allSubjects = Subject::paginate(5);

       $data = [
           'subjects' => $allSubjects
       ];
       
       return view('home', $data);
    }

    public function addsubject()
    {
       return view('addsubject');
    }

    public function addsubjectaction(Request $request)
    {  
        $rules = Validator::make($request->all(), [
            // 'id' => 'required|min:6|unique:users',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:1',
            'total_learning_hours' => 'required|numeric|min:1',
            // 'password_confirmation' => 'min:6',
            // 'agree-term' => 'accepted'
        ]);

        $rules->validate();

        $obj = new Subject();

        $obj->title = $request->title;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->total_learning_hours = $request->total_learning_hours;
        
        $obj->save();
         
        return redirect('home');
    }
}
