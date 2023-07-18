@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Input Data Buku Keluar </h2>
    <form action="{{ url('keluar') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label class="mb-2" for="">Nama Buku Yang di Pinjam</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="keluar_id_masuk">
                <option selected>Pilih Buku Yang di pinjam </option>
                @foreach ($rowskeluar as $KeluarItem)
                    <option value="{{ $KeluarItem->masuk_id }}">{{ $KeluarItem->masuk_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Nama Peminjam</label>
            <input type="text" name="keluar_nama" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Buku</label>
            <input type="text" name="keluar_jumlah" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Tanggal Peminjaman</label>
            <input type="date" name="keluar_tanggal" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection