@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Edit Data Buku Masuk </h2>
    <form action="{{ url('masuk/' .$row->masuk_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label class="mb-2" for="">Nama Buku</label>
            <input type="text" name="masuk_nama" id="" class="form-control bg-body-secondary w-50" value="{{$row->masuk_nama}}">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jenis Buku</label>
            <input type="text" name="masuk_jenis" id="" class="form-control bg-body-secondary w-25" value="{{$row->masuk_jenis}}">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Buku</label>
            <input type="text" name="masuk_jumlah" id="" class="form-control bg-body-secondary w-25" value="{{$row->masuk_jumlah}}">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Tanggal Masuk</label>
            <input type="date" name="masuk_tanggal" id="" class="form-control bg-body-secondary w-50" value="{{$row->masuk_tanggal}}">
        </div>
        <div>
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection