@extends('kontak.base')

@section('body')

<h1><a href = "{{route('kontak_index')}}">Kontak</a></h1>

<form action="{{route('search_kontak')}}" method="get">
<input type="text" name="keyword" placeholder="Cari Nama">
<button type="submit">Search</button>
</form>
<button onclick="location.href = '{{route('new_kontak')}}';" id="buttonNew">Kontak Baru</button>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>

    @foreach($listKontaks as $kontak)
    <tr>
        <td>{{$kontak->id}}</td>
        <td>{{$kontak->nama}}</td>
        <td>{{$kontak->telepon}}</td>
        <td>{{$kontak->email}}</td>
        <td>{{$kontak->alamat}}</td>
        <td>
            <button onclick="location.href = '{{route('edit_kontak', ['id'=>$kontak->id])}}';" id="btnEdit">Edit</button>
            <button onclick="if (confirmDelete()) location.href = '{{route('delete_kontak', ['id'=>$kontak->id])}}';" id = "btnDelete">Delete</button>
        </td>
    </tr>
    @endforeach
</table>
<script>
    function confirmDelete(){
        return confirm("Are you sure ?");
    }
</script>
@endsection