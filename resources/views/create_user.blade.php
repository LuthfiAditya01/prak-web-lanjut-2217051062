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
    <body  class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('anyawp.jpg') }}')">
        <div class="form px-10 mt-28 mb-8 bg-white mx-96 py-32 rounded-xl bg-opacity-80">
            <form action="{{ route('user_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" class="rounded-xl"><br><br>
                
                <label for="npm">NPM : </label>
                <input type="text" name="npm" id="npm" class="rounded-xl"><br><br>
        
                <label for="id_kelas">Kelas : </label>
                <select name="kelas_id" id="kelas_id" class="rounded-xl" required>
                    @foreach($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                    @endforeach
                </select><br><br>
                <label for="jurusan_id">Jurusan : </label>
                <select name="jurusan_id" id="jurusan_id" class="rounded-xl">
                    @foreach($jurusan as $jurusanItem)
                    <option value="{{$jurusanItem->id}}">{{$jurusanItem->nama_jurusan}}</option>
                    @endforeach
                </select><br><br>
                    {{-- <label for="foto">Foto: </label>
                    <input type="file" name="foto" id="foto" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-200 file:text-blue-500 hover:file:bg-violet-100"><br><br><br><br> --}}
        
                
        
                <button class="text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-200 file:text-blue-500 hover:file:bg-violet-100" type="submit">Submit!</button>
        
            </form>
        </div>
    </body>
    @endsection
<!-- </body>
</html> -->