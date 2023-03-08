<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\sampleLSM;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SampleLSMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (request()->has('search')) {

            $data = sampleLSM::where('book_name', 'LIKE', '%' . request('search') . '%')->get();
        } else {
            $data = sampleLSM::all();
        }
        // return view('sample.index', ['book' => $data]);

        // dd($data);
        return view('sample.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sample/add-book');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'genre' => 'required|string|max:255',
            'book_name' => 'required|string|max:255',
            'book_author' => 'required|string|max:255',
            'pub_date' => 'required|date',
            'quantity' => 'required|numeric',
        ]);
        try {
            // dd($validated);
            sampleLSM::create($validated);

            return redirect(route('sample.index'));
            // dd("dsfsdf");
        } catch (\Exception $th) {
            // dd($th);
            return redirect(route('sample.index'))->withErrors($validated);
        }

        $request->user()->sample()->create($validated);

        return redirect(route('sample.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(sampleLSM $sampleLSM)
    {
        return view('sample.add-book');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        return view('sample.edit-book', [
            'sample' => sampleLSM::find(intval($id)),
        ]);
        // dd($sampleLSM);
        // return view('update', ['sampleLSM' => $sampleLSM]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(sampleLSM $sample, Request $request)
    {
        $sample->genre = $request['genre'];
        $sample->book_name = $request->book_name;
        $sample->book_author = $request->book_author;
        $sample->pub_date = $request->pub_date;
        $sample->quantity = $request->quantity;
        $sample->save();
        return redirect(route('sample.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sampleLSM  $sample): RedirectResponse
    {
        $item = sampleLSM::find($sample->id);
        $item->delete();

        return redirect(route('sample.index'));
        // $data->delete();
        // return redirect('sample');
        //
    }
    public function search(Request $request)
    {
        // Get the search value from the request
        // $search = $request->input('search');

        // // Search in the title and body columns from the posts table
        // $sample = sampleLSM::query()
        //     ->where('id', 'LIKE', "%{$search}%")
        //     ->orWhere('book_name', 'LIKE', "%{$search}%")
        //     ->get();

        // // Return the search view with the resluts compacted
        // return view('sample.index', compact('dashboard'));
    }
}