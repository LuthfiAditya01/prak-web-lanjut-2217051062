<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
    $data = [
        'nama' => 'Luthfi Aditya',
        'kelas' => 'B',
        'npm' => '2217051062'
    ];
    return view('profile', $data);
    }
    public function create(){
        return view('create_user');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }
    public function edit ($id)
    {
        $user = User Model::findOrFail($id);
        $kelas Model = new Kelas();
        $kelas $kelas Model->getKelas();
        $title = 'Edit User';
        return view('edit_user', compact('user', 'kelas', 'title'));
    }
}

