@extends('layouts.app')

@section ('content')
<div class="mb-3 mt-2 m-3">
    <a href="{{ route('user.create') }}" class="btn btn-success">
        Tambah User
    </a>
</div>

<div class="container" mt-5>
    <h1 class="text-center">List Data</h1>
    <table class="table">
        <thead>
            <tr>
                <th class="col">ID</th>
                <th class="col">Nama</th>
                <th class="col">NPM</th>
                <th class="col">Kelas</th>
                <th class="col">Foto</th>
                <th class="col">Aksi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($users ad $user){ ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['npm'] ?></td>
                    <td><?= $user['nama_kelas'] ?></td>
                    <td>
                        <img src="{{ asset('' . $user->foto) }}" alt="Foto User" width="100">
                    </td>
                    <td>
                        <!-- view -->
                        <a href="{{ route(user.show, $user['id']) }}" class="button btn-primary btn-sm">View</a>
                        <!-- edit -->
                        <a href="{{ route(user.edit, $user['id']) }}" class="button btn-primary btn-sm">Edit</a>
                        <!-- Delete -->
                         <form action="{{ route(user.destroy, $user['id'] }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm Apakah Anda yakin ingin menghapus user ini?')">Delete</button>
                         </form>                        
                    </td>
                </tr>
        }
        ?>
        </tbody>
    </table>
</div>