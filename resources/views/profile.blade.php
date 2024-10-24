<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tell Me!</title>
    <style>
        .profile {
            margin-top: 200px;
            
        }
        .image img {
            width: 10%;
            border-radius: 50%;
        }

        .name, .npm, .kelas h2 {
            background-color: #d9d9d9;
            margin-right: 800px;
            margin-left: 800px;
            /* padding-top: 2px;
            padding-bottom: 2px; */
            margin-top: 20px;

        }

        
    </style>
</head>
<body>
    <div class="profile">
        <div class="image">
            <center><img src="{{ asset('myself.jpg') }}" alt=""></center>
        </div>
        <div class="data">
            <div class="name">
                <center><h2>{{ $nama }}</h2></center>
            </div>
            <div class="npm">
                <center><h2>{{ $npm }}</h2></center>
            </div>
            <div class="kelas">
                <center><h2>{{ $kelas ?? 'Kelas Tidak Ditemukan'}}</h2></center>
            </div>
        </div>
    </div>
</body>
</html>