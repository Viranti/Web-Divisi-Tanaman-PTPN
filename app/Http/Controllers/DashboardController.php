<?php

namespace App\Http\Controllers;

use App\Models\TahunTanam;
use Illuminate\Http\Request;
use App\Models\Protas;
use App\Models\Raystat;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Panggil metode getTotalData untuk mengambil total data
        $totalData = $this->getTotalData();

        return view('admin/dashboard', ['totalData' => $totalData]);
    }

    private function getTotalData()
    {
        // Menghitung total data dari tabel Protas
        $totalProtas = Protas::count();

        // Menghitung total data dari tabel Raystats
        $totalRaystats = Raystat::count();
        
        // Menghitung total data dari tabel Raystats
        $totalTahunTanam = TahunTanam::count();

        // Menghitung total data dari kedua tabel tersebut
        $totalAllData = $totalProtas + $totalRaystats + $totalTahunTanam;

        return [
            'totalProtas' => $totalProtas,
            'totalRaystats' => $totalRaystats,
            'totalTahunTanam' => $totalTahunTanam,
            'totalAllData' => $totalAllData
        ];
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
        //
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
