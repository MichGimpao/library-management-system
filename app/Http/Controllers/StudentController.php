<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (request()->has('search')) {

            $data = Student::where('fname', 'LIKE', '%' . request('search') . '%')->get();
        } else {
            $data = Student::all();
        }
        // $data = Student::get();
        return view('student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('student.add-student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'stud_id' => 'required|string|max:255',
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_block' => 'required|string|max:255',
            'stud_address' => 'required|string|max:255',
            'stud_contactno' => 'required|string|max:255',
            'stud_email' => 'required|string|max:255',
        ]);
        try {
            Student::create($validated);

            return redirect(route('student.index'));
        } catch (\Exception $th) {
            return redirect(route('student.index'))->withErrors($validated);
        }

        $request->user()->student()->create($validated);

        return redirect(route('student.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('student.edit-student', [
            'student' => Student::find(intval($id)),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->stud_id = $request['stud_id'];
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->gender = $request->gender;
        $student->course = $request->course;
        $student->year_block = $request->year_block;
        $student->stud_address = $request->stud_address;
        $student->stud_contactno = $request->stud_contactno;
        $student->stud_email = $request->stud_email;
        $student->save();
        return redirect(route('student.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student): RedirectResponse
    {
        $student = Student::find($student->id);
        $student->delete();

        return redirect(route('student.index'));
    }

    // public function search(Request $request)
    // {
    //     // Get the search value from the request
    //     $search = $request->input('search');

    //     // Search in the title and body columns from the posts table
    //     $student = Student::query()
    //         ->where('lname', 'LIKE', "%{$search}%")
    //         ->orWhere('stud_id', 'LIKE', "%{$search}%")
    //         ->get();

    //     // Return the search view with the resluts compacted
    //     return view('search', compact('dashboard'));
    // }
}
