@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3 mb-5"> Tampil Data Buku Kembali</h2>
<a href="{{ url('kembali/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID</th>
        <th>ID KELUAR</th>
        <th>NAMA PENGEMBALI</th>
        <th>JUMLAH YANG DI KEMBALIKAN</th>
        <th>TANGGAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->kembali_id }}</td>
        <td>{{ $row->kembali_id_keluar }}</td>
        <td>{{ $row->kembali_nama }}</td>
        <td>{{ $row->kembali_jumlah }}</td>
        <td>{{ $row->kembali_tanggal }}</td>
        <td><a href="{{ url('kembali/edit/' .$row->kembali_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('kembali/' .$row->kembali_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection