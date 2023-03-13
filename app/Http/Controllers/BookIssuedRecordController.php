<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\BookIssuedRecord;
use App\Models\sampleLSM;
use App\Models\Student;


use Illuminate\Http\Request;

class BookIssuedRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = BookIssuedRecord::with(["student", "book"])->get();
        return view('bookissued.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd("gdthghdr");

        return view('bookissued.add-issued', ["students" => Student::get(), "sample_l_s_m" => sampleLSM::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->all());
        $validated = $request->validate([
            'stud_id' => 'required|string|max:255',
            'book_id' => 'required|string|max:255',
            // 'bk_title' => 'required|string|max:255',
            // 'stud_name' => 'required|string|max:255',
            'no_copies' => 'required|string|max:255',
            'release_date' => 'required',
            'status' => 'required',
            'due_date' => 'required',
        ]);
        try {
            BookIssuedRecord::create($validated);

            return redirect(route('bookissued.index'));
        } catch (\Exception $th) {
            dd($th);
            return redirect(route('bookissued.index'))->withErrors($validated);
        }

        $request->user()->student()->create($validated);

        return redirect(route('bookissued.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(BookIssuedRecord $bookIssuedRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($book_id)
    {
        return view('bookissued.edit-bkissued', [
            'BookIssuedRecord' => BookIssuedRecord::find(intval($book_id)),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookIssuedRecord $bookIssuedRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookIssuedRecord $bookIssuedRecord)
    {
        //
    }
}
