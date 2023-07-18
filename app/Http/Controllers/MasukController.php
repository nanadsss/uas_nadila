<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masuk;

class MasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rows = Masuk::all();
        return view('masuk.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('masuk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Masuk::create([
            'masuk_nama' => $request->masuk_nama,
            'masuk_jenis' => $request->masuk_jenis,
            'masuk_jumlah' => $request->masuk_jumlah,
            'masuk_tanggal' => $request->masuk_tanggal
        ]);
        return redirect('masuk');
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
        $row = Masuk::find($id);
        return view('masuk.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $row = Masuk::findOrFail($id);
        $row->update([
            'masuk_nama' => $request->masuk_nama,
            'masuk_jenis' => $request->masuk_jenis,
            'masuk_jumlah' => $request->masuk_jumlah,
            'masuk_tanggal' => $request->masuk_tanggal
        ]);
        return redirect('masuk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $row = Masuk::findOrFail($id);
        $row->delete();
        return redirect('masuk');
    }
}
