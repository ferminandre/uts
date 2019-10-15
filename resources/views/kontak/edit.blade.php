@extends('kontak.base')

@section('body')
    <h1>Kontak</h1>
    <h3>Nama : </h3>
    <form action="{{route('update_kontak', ['id'=>$kontaks->id])}}" method = "post">
        @csrf
    <input type="hidden" name="kontakId" value="{{$kontaks->id}}">
    <input type="text" name="nama" id = "nama" value ="{{$kontaks->nama}}">
    <h3> Telepon : </h3>
    <input type="text" name="telepon" id = "telepon" value ="{{$kontaks->telepon}}">
    <h3>Email : </h3>
    <input type="text" name="email" id = "email" value ="{{$kontaks->email}}">
    <h3>Alamat : </h3>
    <input type="text" name="alamat" id = "alamat" value ="{{$kontaks->alamat}}">
    <br><br>
            <input type="submit" value = "Edit">
    </form>
@endsection