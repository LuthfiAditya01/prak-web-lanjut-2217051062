<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> -->

@extends('layouts.app')

@section('content')
    <!-- @include('_form') -->
    <form action="{{ route('user_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama"><br><br>
        
        <label for="npm">NPM : </label>
        <input type="text" name="npm" id="npm"><br><br>

        <label for="id_kelas">Kelas : </label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach($kelas as $kelasItem)
            <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
            @endforeach
        </select><br><br>
        <label for="foto">Foto: </label>
        <input type="file" name="foto" id="foto"><br><br><br><br>

        

        <button type="submit">Submit!</button>

    </form>
    @endsection
<!-- </body>
</html> -->