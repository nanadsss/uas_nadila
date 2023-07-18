@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3 mb-5"> Tampil Data Buku Keluar </h2>
<a href="{{ url('keluar/create') }}" class="btn btn-primary mb-3">Tambah Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID</th>
        <th>ID MASUK</th>
        <th>NAMA PEMINJAM</th>
        <th>JUMLAH PINJAMAN BUKU</th>
        <th>TANGGAL PEMINJAMAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->keluar_id }}</td>
        <td>{{ $row->keluar_id_masuk }}</td>
        <td>{{ $row->keluar_nama }}</td>
        <td>{{ $row->keluar_jumlah }}</td>
        <td>{{ $row->keluar_tanggal }}</td>
        <td><a href="{{ url('keluar/edit/' .$row->keluar_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('keluar/' .$row->keluar_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection