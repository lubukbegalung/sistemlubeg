<?php

namespace App\Controllers;

use App\Models\KategoriModel;
use CodeIgniter\Controller;

class Kategori extends Controller
{
    protected $KategoriModel;

    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
    }

    public function index()
    {
        // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
        $kategori = $this->KategoriModel->findAll();
        $data = [
            'title' => 'Data Kategori',
            'kategori' => $kategori, // Correct variable name
        ];

        // Use correct view file name
        return view('layout/kategori', $data);
    }

    public function create()
    {
      $KategoriModel=new KategoriModel();
       
        $data = [
            'title' => 'Form Tambah Kategori',];

        return view('layout/createkategori', $data);
    }
        
    

    
    public function save()
    {
        // Use correct field names in insert
        $this->KategoriModel->insert([
            'id_kategori' => $this->request->getVar('1'), // Correct field name
            'nama_kategori' => $this->request->getVar('2'),
           
        ]);
        session()->setFlashdata('pesan', 'Data Kategori berhasil ditambahkan'); // Use lowercase 'pesan'
        return redirect()->to('/kategori'); // Use lowercase 'supplier'
    }

    public function delete($id_kategori)
    {
        $this->KategoriModel->delete($id_kategori);
        session()->setFlashdata('pesan', 'Kategori Berhasil Dihapus');
        return redirect()->to(base_url('kategori'));
    }

    public function edit($id_kategori)
{
    // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
    $kategori = $this->KategoriModel->find($id_kategori);

    if (empty($kategori)) {
        // Correct variable name
        return redirect()->to(base_url('kategori'))->with('error', 'Kategori dengan ID ' . $id_kategori . ' tidak ditemukan')->withInput();
    }

    $data = [
        'title' => 'Form Edit kategori',
        'kategori' => $kategori, // Correct variable name
    ];

    // Use correct view file name
    return view('layout/editkategori', $data);
}

    public function update()
    {
        $id_kategori = $this->request->getVar('id_kategori');

        $this->KategoriModel->update($id_kategori, [
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            
        ]);

        session()->setFlashdata('pesan', 'Data Kategori berhasil diupdate'); // Use lowercase 'pesan'
        return redirect()->to('/kategori'); // Use lowercase 'supplier'
    }
    
}
