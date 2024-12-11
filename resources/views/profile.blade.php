<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell Me!</title>
    @vite('resources/css/app.css')
    {{-- <style>
        .profile {
            margin-top: 200px;
            
        }
        .image img {
            width: 10%;
            border-radius: 50%;
        }

        .name, .npm, .kelas, .jurusan h2 {
            /* background-color: #d9d9d9; */
            margin-right: 800px;
            margin-left: 800px;
            /* padding-top: 2px;
            padding-bottom: 2px; */
            margin-top: 20px;

        }

        
    </style> --}}
</head>
<body class="bg-no-repeat bg-cover" style="background-image: url('{{ asset('wallpaper1.jpg') }}')">
    <div class="profile mt-28 bg-white mx-96 py-32 rounded-xl bg-opacity-80">
        <div class="image">
            <center><img src="{{ asset('myself1.jpg') }}" alt="" class=" w-[15%] rounded-full"></center>
        </div>
        <div class="data">
            <div class="name bg-sky-400 my-2 mx-80 font-semibold py-1 rounded-md">
                <center><h2>{{ $nama }}</h2></center>
            </div>
            <div class="npm bg-sky-400 my-2 mx-80 font-semibold py-1 rounded-md">
                <center><h2>{{ $npm }}</h2></center>
            </div>
            <div class="kelas bg-sky-400 my-2 mx-80 font-semibold py-1 rounded-md">
                <center><h2>{{ $kelas ?? 'Kelas Tidak Ditemukan'}}</h2></center>
            </div>
            <div class="jurusan bg-sky-400 my-2 mx-80 font-semibold py-1 rounded-md">
                <center><h2>{{ $jurusan ?? 'Jurusan Tidak Ditemukan'}}</h2></center>
            </div>
        </div>
    </div>
</body>
</html>