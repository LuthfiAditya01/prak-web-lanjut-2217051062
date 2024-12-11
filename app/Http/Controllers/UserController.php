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
        'npm' => '2217051062',
        'jurusan' => 'Kedokteran Forensik'
    ];
    return view('profile', $data);
    }
    public function create(){
            // $kelasModel = new Kelas();
            // $jurusanModel = new Jurusan();

        $kelas = $this->kelasModel->getKelas();
        // $jurusan = $this->jurusanModel->getJurusan();

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
    public function store(Request $request)
    {
            // Dump and die to see exact validated data
    

    try {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|unique:users,npm|max:255',
            'kelas_id' => 'required|exists:kelas,id',
            'jurusan_id' => 'required|exists:jurusan,id',
        ]);

        // Log the exact data being created
        \Log::info('Creating user with data:', $validatedData);

        $user = userModel::create($validatedData);

        // Check if user was actually created
        if (!$user) {
            \Log::error('User creation failed', $validatedData);
            return back()->with('error', 'Gagal membuat user');
        }
        dd($validatedData);

        return redirect()->route('some.route')->with('success', 'User berhasil dibuat');
    } catch (\Illuminate\Validation\ValidationException $e) {
        // Log validation errors
        \Log::error('Validation Failed', $e->errors());
        return redirect()->back()
            ->withErrors($e->errors())
            ->withInput();
            dd($validatedData);
    } catch (\Exception $e) {
        // Log any unexpected errors
        \Log::error('User Creation Error: ' . $e->getMessage());
        return redirect()->back()
            ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
            ->withInput();
            dd($validatedData);
    }
    }
    // public function store(Request $request){
    //     $this->userModel->create([
    //         'nama' => $request->input('nama'),
    //         'npm' => $request->input('npm'),
    //         'kelas_id' => $request->input('kelas_id'),
    //     ]);

    //     return redirect()->to('/user');
    // }
    // public function store(Request $request){
    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'npm' => 'required|string|max:255',
    //         'kelas_id' => 'required|int',
    //         'jurusan_id' => 'required|int',
    //         'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
        
    //     if ($request->hasFile('foto')){
    //         $foto = $request->file('foto');
    //         $fotoPath = $foto->move(("upload/img"), $foto);
    //     } else {
    //         $fotoPath = null;
    //     }
        
    //     $this->userModel->create([
    //         'nama' => $request->input('nama'),
    //         'npm' => $request->input('npm'),
    //         'kelas_id' => $request->input('kelas_id'),
    //         'jurusan_id' => $request->input('jurusan_id'),
    //         'foto' => $fotoPath,
    //     ]);

    //     return redirect()->to('/user')->with('success', 'User Berhasil Ditambahkan');
    // }
    // public function edit ($id)
    // {
    //     $user = User Model::findOrFail($id);
    //     $kelas Model = new Kelas();
    //     $kelas $kelas Model->getKelas();
    //     $title = 'Edit User';
    //     return view('edit_user', compact('user', 'kelas', 'title'));
    // }
}

