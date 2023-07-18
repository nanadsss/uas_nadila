<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kembali;
use App\Models\Keluar;

class KembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Kembali::all();
        return view('kembali.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rowsKeluar = Keluar::all();
        return view('kembali.create' , compact('rowsKeluar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Kembali::create([
            'kembali_id_keluar' => $request->kembali_id_keluar,
            'kembali_nama' => $request->kembali_nama,
            'kembali_jumlah' => $request->kembali_jumlah,
            'kembali_tanggal' => $request->kembali_tanggal
        ]);
        return redirect('kembali');
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
        $getkeluar = Keluar::all();
        $row = Kembali::find($id);
        $editkeluar= keluar::find($row->kembali_id_keluar);
        return view('kembali.edit', compact('row','editkeluar','getkeluar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Kembali::findOrFail($id);
        $row->update([
            'kembali_id_keluar' => $request->kembali_id_keluar,
            'kembali_nama' => $request->kembali_nama,
            'kembali_jumlah' => $request->kembali_jumlah,
            'kembali_tanggal' => $request->kembali_tanggal
        ]);
        return redirect('kembali');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Kembali::findOrFail($id);
        $row->delete();
        return redirect('kembali');
    }
}
