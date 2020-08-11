@extends('layout')
@section('title')
Home
@endsection
@section('content')
    <div class="container">
    <h1>Kehadiran Seluruh Pegawai</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Tanggal Kehadiran</th>
            <th scope="col">Perubahan</th>
            </tr>
        </thead>
        <tbody>
        @foreach($absens as $absen)
        <tr>
            <th>{{$absen->id}}</th>
            <th>{{$absen->name}}</th>
            <td>{{$absen->division}}</td>
            <td>{{$absen->date}}</td>
            <td>
                <a href="admin/edit/{{$absen->id}}">Edit</a>
                <a href="admin/hapus/{{$absen->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
@endsection