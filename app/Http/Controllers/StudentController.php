<?php
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student',compact('students'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = array(
            'cne'=>'required',
            'firstName' => 'required|string',
            'secondName' => 'required|string',
            'age' => 'required|integer',
            'speciality' => 'required',

    	);
    	
        $request->validate($validations);
        
        $students = new Student();
        $students->cne = $request->input('cne');
        $students->firstName = $request->input('firstName');
        $students->secondName = $request->input('secondName');
        $students->age = $request->input('age');
        $students->speciality = $request->input('speciality');
        $students->save();
        return redirect('/')->with('msg','Student Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('edit',compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();
        return redirect('/')->with('msg','Student Detail Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/')->with('msg','Student with id '.$id.' is successfully deleted.');
    }
}
