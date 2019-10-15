@extends('kontak.base')
@section('body')
    <h1>Kontak</h1>
    <h3>Nama : </h3>
    <form action="{{route('add_kontak')}}" method="post">
        @csrf
        <input type="text" name="nama" id="nama">
    <h3>Telepon : </h3>
        <input type="text" name="telepon" id="telepon">
    <h3>Email : </h3>
        <input type="text" name="email" id="email">
    <h3>Alamat : </h3>
        <input type="text" name="alamat" id="alamat"><br><br>
        <input type="submit" value ="Add">   
    </form>
@endsection