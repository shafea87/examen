<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function viewStudents(){
        $student = Student::all();
        $arr =  array('student' =>  $student); 
        return view('student.view',$arr);
    }
    // public function viewStudents($id){
    //     $student = Student::find($id);
    //     $arr =  array('student' =>  $student); 
    //     return view('student.view',$arr);
    // }

    public function add(Request $request){
        //only exequte when post
        if($request->isMethod('post')){
            $newStudent = new Student();
            $newStudent->name=$request->input('name');
            $newStudent->details=$request->input('details');
            $newStudent->save();
        }
        return view('student.add');
    }

    public function edit(Request $request,$id){
        if($request->isMethod('post')){

            $newStudent=Student::find($id);
            $newStudent->name=$request->input('name');
            $newStudent->details=$request->input('details');
            $newStudent->save();
            
            return redirect('student');
        }else{
            $student=Student::find($id);
            $arr = Array('student'=>$student); 
            return view('student.edit', $arr);
        }
    }
}
