<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Protas;

class ProtasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protas = Protas::all();
        return view('admin/protas', compact('protas'));
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
            'namaDokument' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf|max:2048'
        ]);

        // Simpan file yang diupload dan dapatkan path-nya
        $path = $request->file('document')->store('protas');

        // Buat instance Protas dan simpan data
        $protas = new Protas();
        $protas->namaDokument = $request->namaDokument;
        $protas->document = $path;
        $protas->save();

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
        $protas = Protas::findOrFail($id);
        return view('documents.edit', compact('protas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:protas,id',
            'namaDokument' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $prota = Protas::find($request->id);
        $prota->namaDokument = $request->namaDokument;

        if ($request->hasFile('document')) {
            // Delete the old file if exists
            if ($prota->document) {
                Storage::delete($prota->document);
            }

            // Store the new file
            $filePath = $request->file('document')->store('documents');
            $prota->document = $filePath;
        }

        $prota->save();

        return redirect()->route('protas')->with('success', 'Dokumen berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $protas = Protas::findOrFail($id);

        if (Storage::exists($protas->document)) {
            Storage::delete($protas->document);
        }

        $protas->delete();

        return redirect()->route('protas')->with('success', 'Document deleted successfully.');
    }

    public function download($id)
    {
        $protas = Protas::findOrFail($id);
        $path = storage_path('app/' . $protas->document);

        if (!Storage::exists($protas->document)) {
            return redirect()->route('protas')->with('error', 'File not found.');
        }

        // Mengambil ekstensi file
        $extension = pathinfo($path, PATHINFO_EXTENSION);

        // Membuat nama file baru dengan menggunakan namaDokument dan menambahkan ekstensi file
        $fileName = $protas->namaDokument . '.' . $extension;

        return response()->download($path, $fileName);
    }
}
