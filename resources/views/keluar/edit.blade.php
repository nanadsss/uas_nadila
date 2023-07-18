@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Edit Data Buku keluar </h2>
    <form action="{{ url('keluar/' .$row->keluar_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label for="" class="mb-2">Nama Buku Yang di Pinjam</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="keluar_id_masuk">
                @foreach ($getmasuk as $MasukItem)
                    <option value="{{ $MasukItem->masuk_id }}">{{ $MasukItem->masuk_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="mb-2">Nama peminjam</label>
            <input type="text" name="keluar_nama" id="" class="form-control bg-body-secondary w-50" value="{{$row->keluar_nama}}">
        </div>
        <div class="mb-3">
            <label for="" class="mb-2">Jumlah Buku</label>
            <input type="text" name="keluar_jumlah" id="" class="form-control bg-body-secondary w-25" value="{{$row->keluar_jumlah}}">
        </div>
        <div class="mb-3">
            <label for="" class="mb-2">Tanggal Peminjaman</label>
            <input type="date" name="keluar_tanggal" id="" class="form-control bg-body-secondary w-50" value="{{$row->keluar_tanggal}}">
        </div>
        <div>
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection