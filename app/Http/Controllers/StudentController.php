<?php

namespace App\Http\Controllers;

use App\Models\Student;
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
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $student->studentDetail()->create([
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);
        return redirect(route("students.index"))->with('message', 'student and student detail created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        dd($student);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        $student->studentDetail()->update([
            'student_id' => $request->id,
            'alter_phone' => $request->alter_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);
        $students = $student;
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students');
    }

    // Custom Function
    public function addDetails($student_id)
    {
        $student = Student::findOrFail($student_id)->studentDetail;
        return view('student.detail', compact('student'));
    }

    public function storeOrUpdateDetails(Request $request,  $student_id)
    {
        $student = Student::findOrFail($student_id);
        $student->studentDetail()->updateOrCreate(
            [
                'student_id' => $student_id
            ],
            [
                'alter_phone' => $request->alter_phone,
                'course' => $request->course,
                'roll_no' => $request->roll_no,
            ]
        );
        return redirect('students')->with('message', 'Saved Successfully');
    }
}