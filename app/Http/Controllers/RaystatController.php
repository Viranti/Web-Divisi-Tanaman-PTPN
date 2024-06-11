<?php

namespace App\Http\Controllers;

use App\Models\Kebun;
use App\Models\Raystat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;

class RaystatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raystat = Raystat::all();
        $kebuns = Kebun::all();
        return view('admin/raystat', compact('raystat', 'kebuns'));
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
    public function store(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'namaDokument' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf|max:40000'
        ]);

        // Simpan file yang diupload dan dapatkan path-nya
        $path = $request->file('document')->store('raystat');

        // Buat instance raystat dan simpan data
        $raystat = new Raystat();
        $raystat->namaDokument = $request->namaDokument;
        $raystat->id_kebun = $id;
        $raystat->document = $path;
        $raystat->save();

        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kebun = Kebun::findOrFail($id);
        $raystat = Raystat::where('id_kebun', $id)->get();
        return view('admin/raystatData', compact('kebun', 'raystat'));
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
            'id' => 'required|exists:raystats,id',
            'namaDokument' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $raystat = Raystat::find($request->id);
        $raystat->namaDokument = $request->namaDokument;

        if ($request->hasFile('document')) {
            // Delete the old file if exists
            if ($raystat->document) {
                Storage::delete($raystat->document);
            }

            // Store the new file
            $filePath = $request->file('document')->store('documents');
            $raystat->document = $filePath;
        }

        $raystat->save();

        return redirect()->back()->with('success', 'Document deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $raystat = Raystat::findOrFail($id);

        if (Storage::exists($raystat->document)) {
            Storage::delete($raystat->document);
        }

        $raystat->delete();

        return redirect()->back()->with('success', 'Document updated successfully.');
    }

    public function download($id)
    {
        $raystat = Raystat::findOrFail($id);
        $path = storage_path('app/' . $raystat->document);

        if (!Storage::exists($raystat->document)) {
            return redirect()->route('raystat')->with('error', 'File not found.');
        }

        // Mengambil ekstensi file
        $extension = pathinfo($path, PATHINFO_EXTENSION);

        // Membuat nama file baru dengan menggunakan namaDokument dan menambahkan ekstensi file
        $fileName = $raystat->namaDokument . '.' . $extension;

        return response()->download($path, $fileName);
    }
}
