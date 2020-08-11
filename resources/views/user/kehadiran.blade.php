@extends('layout')
@section('title')
Home
@endsection
@section('content')
    <div class="container">
    <h1>Kehadiran</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Nama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Tanggal Kehadiran</th>
            </tr>
        </thead>
        <tbody>
        @foreach($absens as $absen)
        <tr>
            <th>{{$absen->name}}</th>
            <td>{{$absen->division}}</td>
            <td>{{$absen->date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
@endsection