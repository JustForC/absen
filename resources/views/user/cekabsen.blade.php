@extends('layout')
@section('title')
Kehadiran
@endsection
@section('content')
    <div class="container">
    <h1>Masukan Nama dan Divisi</h1>
    <form action="/absen/kehadiran" method="get">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Divisi</label>
            <select type="text" class="form-control" name="divisi" id="divisi">
            <option>Divisi 1</option>
            <option>Divisi 2</option>
            <option>Divisi 3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Cari</button>
    </form>
    </div>
@endsection