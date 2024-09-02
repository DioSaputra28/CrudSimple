<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use App\Models\RiwayatDataBarang;
use Illuminate\Routing\Controller;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarangs = DataBarang::orderBy('created_at', 'DESC')->get();
        
        return view('pages.dataBarang', [
            'title' => 'Data Barang',
        ], compact('dataBarangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create', [
            'title' => 'Tambah Data Barang'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DataBarang::create(($request->all()));

        return redirect()->route('pages.index')->with('Berhasil', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $databarang = DataBarang::findOrFail($id);
        return view('pages.view', [
            'title' => 'View Data Barang'
        ], compact('databarang'));;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $databarang = DataBarang::findOrFail($id);
        return view('pages.edit', [
            'title' => 'Edit Data Barang'
        ], compact('databarang'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $databarang = DataBarang::findOrFail($id);
        
        $databarang->update($request->all());
        return redirect()->route('pages.index')->with('Berhasil', 'Data berhasil diupdate.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $databarang = DataBarang::findOrFail($id);
       
        $databarang->delete();
        return redirect()->route('pages.index')->with('Berhasil', 'Data berhasil dihapus.');

    }

    // Statistik
    public function statistikBeranda()
    {
        $dataHariIni = DataBarang::whereDate('created_at', today())->count();
        $dataTerhapus = DataBarang::onlyTrashed()->count();

        return view('sidebar.beranda', [
            "title" => "Beranda",
            'dataHariIni' => $dataHariIni,
            'dataTerhapus' => $dataTerhapus,
        ]);
    }
}
