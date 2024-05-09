<?php

namespace App\Controllers;

use App\Models\PostinganModel;
use App\Models\KategoriModel;
use App\Models\ArtikelModel;
use CodeIgniter\Controller;

class Postingan extends Controller
{
    protected $PostinganModel;
    protected $helpers=['custom'];
    private $artikel;
    private $kategori;

    public function __construct()
    {
        $this->artikel=new ArtikelModel();
        $this->PostinganModel = new PostinganModel();
        $this->kategori = new KategoriModel();
    }

    public function index()
    {
        // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
        $postingan = $this->PostinganModel->findAll();
        $data = [
            'title' => 'Data postingan Kategori',
            'postingan_kategori' => $postingan, // Correct variable name
        ];

        // Use correct view file name
        return view('layout/postingan', $data);
        
    }

    public function create()
    {
    $data['artikel']=$this->artikel->findAll();
    $data['kategori']=$this->kategori->findAll();
    return view('layout/createpostingan',$data);  
    }

    public function save()
    {
        // Use correct field names in insert
        $this->PostinganModel->insert([
            'id_artikel' => $this->request->getVar('1'), // Correct field name
            'id_kategori' => $this->request->getVar('2'),
            'tgl_posting' => $this->request->getVar('3'), // Correct field name
            'username' => $this->request->getVar('4'),
            'link' => $this->request->getVar('5'),
        ]);
        session()->setFlashdata('pesan', 'Data Postingan berhasil ditambahkan'); // Use lowercase 'pesan'
        return redirect()->to('/postingan'); // Use lowercase 'supplier'
    }

    public function delete($id_artikel)
    {
        $this->PostinganModel->delete($id_artikel);
        session()->setFlashdata('pesan', 'Postingan Berhasil Dihapus');
        return redirect()->to(base_url('postingan'));
    }

    public function edit($id_artikel)
{
    // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
    $postingan = $this->PostinganModel->find($id_artikel);

    if (empty($postingan)) {
        // Correct variable name
        return redirect()->to(base_url('postingan_kategori'))->with('error', 'Postingan dengan ID ' . $id_artikel . ' tidak ditemukan')->withInput();
    }

    $data = [
        'title' => 'Form Edit Postingan',
        'postingan_kategori' => $postingan, // Correct variable name
    ];

    // Use correct view file name
    return view('layout/editpostingan', $data);
}

    public function update()
    {
        $id_artikel = $this->request->getVar('id_artikel');

        $this->PostinganModel->update($id_artikel, [
            'id_kategori' => $this->request->getVar('id_kategori'),
            'tgl_posting' => $this->request->getVar('tgl_posting'),
            'link' => $this->request->getVar('link'),
            
        ]);

        session()->setFlashdata('pesan', 'Data Postingan berhasil diupdate'); // Use lowercase 'pesan'
        return redirect()->to('/postingan'); // Use lowercase 'supplier'
    }
    
}
