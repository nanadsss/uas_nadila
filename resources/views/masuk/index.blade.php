@extends('layouts.app')
@section('content')
<h2 class="text-center mt-3 mb-5"> Tampil Data Buku Masuk </h2>
<a href="{{ url('masuk/create') }}" class="btn btn-primary mb-3">Input Data</a>
<table class="table table-bordered">
    <tr class="text-center">
        <th>ID</th>
        <th>NAMA BUKU</th>
        <th>JENIS</th>
        <th>JUMLAH</th>
        <th>TANGGAL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ($rows as $row)
    <tr class="text-center">
        <td>{{ $row->masuk_id }}</td>
        <td>{{ $row->masuk_nama }}</td>
        <td>{{ $row->masuk_jenis }}</td>
        <td>{{ $row->masuk_jumlah }}</td>
        <td>{{ $row->masuk_tanggal }}</td>
        <td><a href="{{ url('masuk/edit/' .$row->masuk_id )}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{ url('masuk/' .$row->masuk_id) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                @csrf 
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
    </tr>
    @endforeach
</table>
@endsection