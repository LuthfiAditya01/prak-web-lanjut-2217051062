<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Models\Jurusan;



class UserController extends Controller
{
    public $userModel;
    public $kelasModel;
    public $jurusanModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
        $this->jurusanModel = new Jurusan();
    }
    public function index()
    {
        $data = [
            'title' => 'Create User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }
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
            // $kelasModel = new Kelas();
            // $jurusanModel = new Jurusan();

        $kelas = $this->kelasModel->getKelas();
        $jurusan = $this->jurusanModel->getJurusan();

        $data = [
            'title' => 'Create User',
            'kelas' => $this->kelasModel->getKelas(),
            'jurusan' => $this->jurusanModel->getJurusan(),
        ];

        return view('create_user', $data);
    }
    // public function store(Request $request)
    // {
    //     $data = $request->all();
    //     dd($data);
    // }
    // public function store(Request $request)
    // {
    //         $validatedData = $request->validate([
    //             'nama' => 'required|string|max:255',
    //             'npm' => 'required|string|max:255',
    //             'kelas_id' => 'required|exists:kelas,id',
    //         ]);

    //         $user = $this->UserModel::create($validatedData);

    //         $user->load('kelas');
            
    //         return view('profile', [
    //             'nama' => $user->nama,
    //             'npm' => $user->npm,
    //             'kelas' => $user->kelas->nama_kelas ?? 'Kelas Tidak Ditemukan', 
    //         ]);
    // }
    // public function store(Request $request){
    //     $this->userModel->create([
    //         'nama' => $request->input('nama'),
    //         'npm' => $request->input('npm'),
    //         'kelas_id' => $request->input('kelas_id'),
    //     ]);

    //     return redirect()->to('/user');
    // }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|int',
            'jurusan_id' => 'required|int',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('foto')){
            $foto = $request->file('foto');
            $fotoPath = $foto->move(("upload/img"), $foto);
        } else {
            $fotoPath = null;
        }
        
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'jurusan_id' => $request->input('jurusan_id'),
            'foto' => $fotoPath,
        ]);

        return redirect()->to('/user')->with('success', 'User Berhasil Ditambahkan');
    }
    // public function edit ($id)
    // {
    //     $user = User Model::findOrFail($id);
    //     $kelas Model = new Kelas();
    //     $kelas $kelas Model->getKelas();
    //     $title = 'Edit User';
    //     return view('edit_user', compact('user', 'kelas', 'title'));
    // }
}

