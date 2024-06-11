<?php

namespace App\Http\Controllers;

use App\Models\Kebun;
use App\Models\TahunTanam;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TahunTanamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tahunTanam = TahunTanam::all();
        $kebuns = Kebun::all();
        return view('admin/tahunTanam', compact('tahunTanam', 'kebuns'));
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
    public function store(Request $request,$id):RedirectResponse
    {
        $request->validate([
            'namaDokument' => 'required|string|max:255',
            'document' => 'required|file|mimes:pdf|max:40000'
        ]);

        // Simpan file yang diupload dan dapatkan path-nya
        $path = $request->file('document')->store('tahunTanam');

        // Buat instance raystat dan simpan data
        $tahunTanam = new TahunTanam();
        $tahunTanam->namaDokument = $request->namaDokument;
        $tahunTanam->id_kebun = $id;
        $tahunTanam->document = $path;
        $tahunTanam->save();

        return redirect()->back()->with('success', 'Document uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kebun = Kebun::findOrFail($id);
        $tahunTanam = TahunTanam::where('id_kebun', $id)->get();
        return view('admin/tahunTanamData', compact('kebun', 'tahunTanam'));
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
            'id' => 'required|exists:tahun_tanams,id',
            'namaDokument' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $tahunTanam = TahunTanam::find($request->id);
        $tahunTanam->namaDokument = $request->namaDokument;

        if ($request->hasFile('document')) {
            // Delete the old file if exists
            if ($tahunTanam->document) {
                Storage::delete($tahunTanam->document);
            }

            // Store the new file
            $filePath = $request->file('document')->store('documents');
            $tahunTanam->document = $filePath;
        }

        $tahunTanam->save();

        return redirect()->back()->with('success', 'Document updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tahunTanam = TahunTanam::findOrFail($id);

        if (Storage::exists($tahunTanam->document)) {
            Storage::delete($tahunTanam->document);
        }

        $tahunTanam->delete();
        return redirect()->back()->with('success', 'Document deleted successfully.');
    }

    public function download($id)
    {
        $tahunTanam = TahunTanam::findOrFail($id);
        $path = storage_path('app/' . $tahunTanam->document);

        if (!Storage::exists($tahunTanam->document)) {
            return redirect()->route('tahunTanam')->with('error', 'File not found.');
        }

        // Mengambil ekstensi file
        $extension = pathinfo($path, PATHINFO_EXTENSION);

        // Membuat nama file baru dengan menggunakan namaDokument dan menambahkan ekstensi file
        $fileName = $tahunTanam->namaDokument . '.' . $extension;

        return response()->download($path, $fileName);
    }
}
