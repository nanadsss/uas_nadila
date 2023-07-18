@extends('layouts.app')
@section('content')
<h2 class="text-center mb-5"> Edit Data Buku Kembali </h2>
    <form action="{{ url('kembali/' .$row->kembali_id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf 
        <div class="mb-3">
            <label class="mb-2" for="">Nama Peminjam</label>
            <select class="form-select bg-body-secondary w-50" id="inputGroupSelect01" name="kembali_id_keluar">
                @foreach ($getkeluar as $KeluarItem)
                    <option value="{{ $KeluarItem->keluar_id }}">{{ $KeluarItem->keluar_nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Nama Pengembali</label>
            <input type="text" name="kembali_nama" id="" class="form-control bg-body-secondary w-50" value="{{$row->kembali_nama}}">
        </div>
        <div class="mb-3">
            <label class="mb-2" for="">Jumlah Yang di kembalikan</label>
            <input type="text" name="kembali_jumlah" id="" class="form-control bg-body-secondary w-25" value="{{$row->kembali_jumlah}}">
        </div>
        <div class="mb-3">
            <label class="mb-2">Tanggal Kembali</label>
            <input type="date" name="kembali_tanggal" id="" class="form-control bg-body-secondary w-50" value="{{$row->kembali_tanggal}}">
        </div>
        <div class="mb-3">
            <input type="submit" value="Update" class="btn btn-warning">
        </div>
    </form>
@endsection