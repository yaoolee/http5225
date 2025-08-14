<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use App\Models\Course;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index', [
                'students' => Student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('students.create', ['courses' => $courses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());
        $student->courses()->attach($request->courses);
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {   
        $student->update($request->validated());
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
  /*   public function trash($id)
     {
       Student::Destroy($id);
       Session::Flash('success', 'Student trashed successfully');
       return redirect() -> route('students.index');
     } */
    public function destroy($id)
     {
       $student = Student::findOrFail($id);
    $student->delete(); 
     Session::flash('success', 'Student permanently deleted.');
    return redirect()->route('students.index');
     }
   /*   public function restore($id)
     {
       $student = Student::withTrashed() -> where('id', $id) -> first();
       $student -> restore();
       Session::Flash('success', 'Student restored successfully');
        return redirect() -> route('students.trashed');
     } */
}
