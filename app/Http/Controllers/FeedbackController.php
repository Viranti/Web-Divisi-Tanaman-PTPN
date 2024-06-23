<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client/kontak');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'pesan' => 'required|string|max:10000'
        ]);

        $feedback = new Feedback();
        $feedback->nama = $request->nama;
        $feedback->email = $request->email;
        $feedback->pesan = $request->pesan;
        $feedback->save();

        return redirect()->back()->with('success', 'Masukan Terkirim');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $feedbacks = Feedback::all();
        return view('admin/masukan', compact('feedbacks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
