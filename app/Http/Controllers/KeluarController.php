<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluar;
use App\Models\Masuk;

class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Keluar::all();
        return view('keluar.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowskeluar = Masuk::all();
        return view('keluar.create', compact('rowskeluar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Keluar::create([
            'keluar_id_masuk' => $request->keluar_id_masuk,
            'keluar_nama' => $request->keluar_nama,
            'keluar_jumlah' => $request->keluar_jumlah,
            'keluar_tanggal' => $request->keluar_tanggal
        ]);
        return redirect('keluar');
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
        $getmasuk = Masuk::all();
        $row = Keluar::find($id);
        $editmasuk = Masuk::find($row->keluar_id_masuk);
        return view('keluar.edit', compact('row','editmasuk','getmasuk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Keluar::findOrFail($id);
        $row->update([
            'keluar_id_masuk' => $request->keluar_id_masuk,
            'keluar_nama' => $request->keluar_nama,
            'keluar_jumlah' => $request->keluar_jumlah,
            'keluar_tanggal' => $request->keluar_tanggal
        ]);
        return redirect('keluar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Keluar::findOrFail($id);
        $row->delete();
        return redirect('keluar');
    }
}
