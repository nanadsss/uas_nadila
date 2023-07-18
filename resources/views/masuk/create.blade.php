@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Input Data Buku Masuk </h2>
    <form action="{{ url('masuk') }}" method="post">
        @csrf 
        <div class="mb-3">
            <label class="mb-2" for="">Nama Buku</label>
            <input type="text" name="masuk_nama" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jenis Buku</label>
            <input type="text" name="masuk_jenis" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Buku</label>
            <input type="text" name="masuk_jumlah" id="" class="form-control bg-body-secondary w-25">
        </div>
        <div class="mb-3">
            <label for="">Tanggal Masuk</label>
            <input type="date" name="masuk_tanggal" id="" class="form-control bg-body-secondary w-50">
        </div>
        <div>
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
@endsection