<?php

namespace App\Http\Controllers;

use App\Student;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Collection;

// use Alert;


class StudentController extends Controller
{
    //

    public function __construct() {

        $this->middleware('auth')->except(['index','create','update','edit']);
    }
    function index() {

    	$students=Student::all();

		return view('students.index', compact('students'));
    }
    function create() {

    	return view('students.add');
    }

    function store() {
    	$student=new Student;
    	// dd(request(['name','class']));
    	$this->validate(request(), [
    		'name'=>'required',
    		'class'=>'required',
    		'age'=>'required'
    	]);
    	Student::create(request(['name','class','age']));

    	// $student->name=request('name');
    	// $student->class=request('class');
    	// $student->age=request('age');
    	// $student->save();

    	return redirect('/');
    }


      public function update(Student $student)
    {

        $stu= Student::find($student);

        return view('students.update',compact('stu'));
    }
      public function edit(Request $req)
    {
        // dd($req->input());

        // $stu=new Student();
        $stu=Student::find($req->input('id'));
        $stu->name = $req->input('name');
        $stu->class = $req->input('class');
        $stu->age = $req->input('age');
        $stu->save();

        // $stu= Student::find($student);
        // $stu->id=request('id');
        // $stu->name=request()->name;
        // $stu->class=request()->class;
        // $stu->age=request()->age;
        // // Student::create(request(['name','class','age']));
        // $stud=dd($stu);
        //  // $stu->fill($stu);
        //
        //  // @foreach($stu as $s)
        //   $stu->save();
        //   // @endforeach
        // // $students=serialize($stu);
        $students = Student::all();
        //
        // return $stud;
        // Alert::success('Save Successfully!','Info');
        return view('students.index',compact('students'));
    }

    public function delete($id){

      $stu=Student::find($id);
      $stu->delete();
      return back();
    }

  // public function alert(){
  //
  //     Alert::message('Hello!');
  //   }

}
