<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
}

