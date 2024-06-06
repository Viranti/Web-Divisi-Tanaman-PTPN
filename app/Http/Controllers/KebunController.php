<?php

namespace App\Http\Controllers;

use App\Models\Kebun;
use Illuminate\Http\Request;

class KebunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kebun = Kebun::all();
        return view('admin/kebun', compact('kebun'));
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
            'namaKebun' => 'required|string|max:255',
            'luas' => 'required|string|max:255'
        ]);

        $kebuns = new Kebun();
        $kebuns->namaKebun = $request->namaKebun;
        $kebuns->luas = $request->luas;
        $kebuns->save();

        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:kebuns,id',
            'namaKebun' => 'required|string|max:255',
            'luas' => 'required|string|max:255',
        ]);

        $kebun = Kebun::find($request->id);
        $kebun->namaKebun = $request->namaKebun;
        $kebun->luas = $request->luas;

        $kebun->save();

        return redirect()->route('kebun')->with('success', 'Dokumen berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $protas = Kebun::findOrFail($id);

        $protas->delete();

        return redirect()->route('kebun')->with('success', 'Document deleted successfully.');
    }
}
