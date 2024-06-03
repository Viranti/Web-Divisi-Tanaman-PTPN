<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        return view('admin/berita', compact('berita'));
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
        // Validasi input
        $request->validate([
            'judulBerita' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'foto' => 'required|file|mimes:jpg,jpeg,png|max:10000'
        ]);

        // Simpan file yang diupload dan dapatkan path-nya
        $path = $request->file('foto')->store('public/berita');

        // Buat instance Berita dan simpan data
        $beritas = new Berita();
        $beritas->judulBerita = $request->judulBerita;
        $beritas->deskripsi = $request->deskripsi;
        $beritas->foto = $path;
        $beritas->save();

        // Redirect to a view to show the uploaded image
        return redirect()->route('berita', $beritas->id)->with('success', 'Document uploaded successfully.');
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
        // Validasi input
        $request->validate([
            'id' => 'required|exists:beritas,id',
            'judulBerita' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:1000',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        // Cari berita berdasarkan ID
        $berita = Berita::find($request->id);

        // Update data berita
        $berita->judulBerita = $request->judulBerita;
        $berita->deskripsi = $request->deskripsi;

        // Cek apakah ada file foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($berita->foto && Storage::exists($berita->foto)) {
                Storage::delete($berita->foto);
            }

            // Simpan foto baru
            $path = $request->file('foto')->store('public/fotos');
            $berita->foto = $path;
        }

        // Simpan perubahan
        $berita->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('berita')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Temukan berita berdasarkan ID
        $beritas = Berita::findOrFail($id);

        // Hapus file jika ada
        if ($beritas->foto) {
            Storage::delete($beritas->foto);
        }

        // Hapus data berita
        $beritas->delete();

        return redirect()->route('berita')->with('success', 'Document deleted successfully.');
    }
}
