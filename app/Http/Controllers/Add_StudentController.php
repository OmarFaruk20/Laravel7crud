<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Student;

class Add_StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function addstudent(){
    	return view('student.add_student');
    }
    // All Student View
    public function allstudent(){

    	$student_view=Student::orderBy('student_id', 'asc')->paginate(10);
    	// return response()->json($student_view);
    	return view('student.all_student', compact('student_view'));
    }

    // Insert Student

    public function AddStudentPost(Request $request){
      /*|
    	|<------form theke 1ta data tule anaer jonno ------->
    	|return $request->student_name;
        |====================================================
        |<------From Theke sob data tule anar jonno--------->
    	|return $request->all();
    	|*/

    	// Start Form validation
    	 $request->validate([
            'student_name' => ['required', 'min:3', 'max:15'],
        	'student_roll' => ['required', 'unique:students', 'min:3', 'max:6'],
        	'fathers_name' => ['required', 'min:3', 'max:15'],
        	'mothers_name' => ['required', 'min:3', 'max:15'],
        	'student_phone' => ['required', 'min:11', 'max:15'],
        	'student_email' => ['required', 'email'],
        	'student_password' => ['required'],
        	'student_city' => ['required', 'min:4', 'max:30'],
        	'student_address' => ['required', 'min:15', 'max:150'],
        	'student_image' => ['required', 'image', 'max:5000'],
            ]);
    	// End From Validation



    	 $student = new Student;
    	// first database column name = from input fields name
    	 $student->student_name = $request->student_name;
    	 $student->student_roll = $request->student_roll;
    	 $student->fathers_name = $request->fathers_name;
    	 $student->mothers_name = $request->mothers_name;
    	 $student->student_phone = $request->student_phone;
    	 $student->student_email = $request->student_email;
    	 $student->student_password = md5($request->student_password);
    	 $student->student_city = $request->student_city;
    	 $student->student_address = $request->student_address;

    	 if($request->hasfile('student_image')){
    	 	$file = $request->file('student_image');
    	 	$extension = $file->getClientOriginalExtension(); // getting image extension
    	 	$filename = time().'.'.$extension;
    	 	$file->move('upload/', $filename);
    	 	$student->student_image = $filename;
    	 }
    	 else
    	 {
    	 	return $request;
    	 	$student->student_image = '';
    	 }
    	  $student->save();
    	 //return response()->json($student);
    	 return back()->with('success', 'Student Added Successfully');
    }
    // single student view
    public function studentview($student_id){
        $studentview = Student::orderBy('student_id')
        ->where('student_id', $student_id)
        ->first();

        //return response()->json($view);
        return view('student.student_view', compact('studentview'));
    }

    public function studentdelete($id){
       Student::findOrFail($id)->delete();
        //return response()->json($delete);
        return back()->with('success', 'Student Deleted Successfully');
        //return view('student.student_delete');
    }

     // student edit
     public function studentedit($student_id){
        $data = Student::findOrFail($student_id);
       return view('student.student_edit', compact('data'));
    }
    // student update
    public function update_student(Request $request){

        $request->validate([
            'student_name' => ['required', 'min:3', 'max:15'],
        	'fathers_name' => ['required', 'min:3', 'max:15'],
        	'mothers_name' => ['required', 'min:3', 'max:15'],
        	'student_phone' => ['required', 'min:11', 'max:15'],
        	'student_email' => ['required', 'email'],
        	'student_city' => ['required', 'min:4', 'max:30'],
        	'student_address' => ['required', 'min:15', 'max:150'],

            ]);

          $id = $request->student_id;
         
           Student::where('student_id', $id)
          ->update([
                'student_name' => $request->student_name,
                'fathers_name' => $request->fathers_name,
                'mothers_name' => $request->mothers_name,
                'student_phone'=> $request->student_phone,
                'student_email' => $request->student_email,
                'student_city' => $request->student_city,
                'student_address' => $request->student_address,
          ]);
         
          //return response()->json($id);
        return back()->with('success', 'Student Updated Successfully');
    }

}
