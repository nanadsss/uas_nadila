@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Input Data Buku Kembali </h2>
    <form action="{{ url('kembali') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label class="mb-2" for="">Nama Peminjam Buku</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="kembali_id_keluar" >
                <option selected>Pilih Nama Peminjam Buku</option>
                @foreach ($rowsKeluar as $KeluarItem)
                    <option value="{{ $KeluarItem->keluar_id }}">{{ $KeluarItem->keluar_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Nama Pengembali</label>
            <input type="text" name="kembali_nama" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Yang Di Kembalikan</label>
            <input type="text" name="kembali_jumlah" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Tanggal Pengembalian</label>
            <input type="date" name="kembali_tanggal" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection