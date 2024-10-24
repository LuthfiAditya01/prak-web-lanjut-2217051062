<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama">
        
        <label for="npm">Nama : </label>
        <input type="text" name="npm" id="npm">

        <label for="kelas">Nama : </label>
        <input type="text" name="kelas" id="kelas">

    </form>
</body>
</html>