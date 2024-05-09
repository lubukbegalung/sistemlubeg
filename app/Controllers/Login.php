<?php

namespace App\Controllers;

use App\Models\UserModel;

use CodeIgniter\Controller;

class Login extends Controller
{
    protected $UserModel;
    

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        $data['gambar'] = 'koran2.jpeg';
        // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
        $user = $this->UserModel->findAll();
        $data = [
            'title' => 'Form login',
            'user' => $user, // Correct variable name
        ];

        // Use correct view file name
        return view('layout/login', $data);
    }

    public function proseslogin()

{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $UserModel = new UserModel();
    $user = $UserModel->where('username', $username)
                     ->where('password', $password)
                     ->first();

    if ($user) {
        // Login berhasil
        // Misalnya, set session dan redirect ke halaman yang sesuai dengan level pengguna

        // Simpan level pengguna dalam session
        session()->set('level', $user['level']);
        
        // Tentukan URL redirect berdasarkan level pengguna
        $redirectURL = '';
        switch ($user['level']) {
            case 'admin':
                $redirectURL = 'laporan'; // Sesuaikan dengan URL dashboard admin
                break;
            case 'rt':
                $redirectURL = 'input'; // Sesuaikan dengan URL dashboard moderator
                break;
            default:
                $redirectURL = 'laporan'; // Sesuaikan dengan URL dashboard pengguna biasa
                break;
        }

        return redirect()->to($redirectURL);
    } else {
        // Login gagal
        // Misalnya, tampilkan pesan error
        session()->setFlashdata('pesan', 'Login gagal. Periksa kembali username dan password.'); // Use lowercase 'pesan'
        return redirect()->to('login')->with('error', 'Login gagal. Periksa kembali username dan password.');
    }
}

   
}