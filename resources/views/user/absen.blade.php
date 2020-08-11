@extends('layout')
@section('title')
Absen
@endsection
@section('content')
    <div class="container">
    <h1>Silahkan Masukan Data Diri</h1>
    <form action="/absen/store" method="post">
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
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal">
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Selesai</button>
    </form>
    </div>
@endsection