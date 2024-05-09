<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
        $user = $this->UserModel->findAll();
        $data = [
            'title' => 'Data user',
            'user' => $user, // Correct variable name
        ];

        // Use correct view file name
        return view('layout/user', $data);
    }

    public function create()
    {
        $data = ['title' => 'Form Tambah User'];
        return view('layout/createuser', $data);
    }

    public function save()
    {
        // Use correct field names in insert
        $this->UserModel->insert([
            'iduser' => $this->request->getVar('1'), // Correct field name
            'namauser' => $this->request->getVar('2'),
            'username' => $this->request->getVar('3'), // Correct field name
            'password' => $this->request->getVar('4'),
            'level' => $this->request->getVar('5'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan'); // Use lowercase 'pesan'
        return redirect()->to('/user'); // Use lowercase 'supplier'
    }

    public function delete($iduser)
    {
        $this->UserModel->delete($iduser);
        session()->setFlashdata('pesan', 'Data User Berhasil Dihapus');
        return redirect()->to(base_url('user'));
    }

    public function edit($iduser)
{
    // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
    $user = $this->UserModel->find($iduser);

    if (empty($user)) {
        // Correct variable name
        return redirect()->to(base_url('user'))->with('error', 'User dengan ID ' . $iduser . ' tidak ditemukan')->withInput();
    }

    $data = [
        'title' => 'Form Edit kategori',
        'user' => $user, // Correct variable name
    ];

    // Use correct view file name
    return view('layout/edituser', $data);
}

    public function update()
    {
        $iduser = $this->request->getVar('iduser');

        $this->UserModel->update($iduser, [
            'namauser' => $this->request->getVar('namauser'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level' => $this->request->getVar('level'),
        ]);

        session()->setFlashdata('pesan', 'Data User berhasil diupdate'); // Use lowercase 'pesan'
        return redirect()->to('/user'); // Use lowercase 'supplier'
    }
    
}
