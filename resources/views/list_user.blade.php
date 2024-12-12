@extends('layouts.app')
@section('content')
<body class="bg-cover bg-no-repeat" style="background-image: url('{{ asset('jjkwp.jpg') }}')">
    <div class="m-72 bg-[#ffa68c] rounded-xl p-5 bg-opacity-75">
        <a href="{{ route('user_create') }}" class="mb-3 p-2 bg-[#d34e63] rounded-xl font-semibold transition-all ease-in-out bg-opacity-100 hover:p-3 hover:bg-opacity-40">Tambah Pengguna Baru</a><br><br>

        <table class="table-fixed w-full border-spacing-2 border border-black">
            <thead class="caption-top">
                <tr>
                    <th class="border border-black">ID</th>
                    <th class="border border-black">Nama</th>
                    <th class="border border-black">NPM</th>
                    <th class="border border-black">Kelas</th>
                    <th class="border border-black">Aksi</th>
                </tr>
            </thead>
            <center><tbody class="text-center">
                <?php
                foreach ($users as $user) {
                ?>
                    <tr class="">
                    <td class="hover:bg-[#d34e63] hover:font-bold ease-in-out duration-500 border border-black"><?= $user['id'] ?></td>
                    <td class="hover:bg-[#d34e63] hover:font-bold ease-in-out duration-500  border border-black"><?= $user['nama'] ?></td>
                    <td class="hover:bg-[#d34e63] hover:font-bold ease-in-out duration-500  border border-black"><?= $user['npm'] ?></td>
                    <td class="hover:bg-[#d34e63] hover:font-bold ease-in-out duration-500  border border-black"><?= $user['nama_kelas'] ?></td>
                    <td class="hover:bg-[#d34e63] hover:font-bold ease-in-out duration-500 border border-black "><a class="mb-3 p-[2px] bg-[#d34e63] rounded-md font-semibold transition-all ease-in-out bg-opacity-100 hover:px-3 hover:bg-opacity-0" href="route('users.show', $user->id) }}">Detail</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody></center>
        </table>
    </div>
</body>
@endsection