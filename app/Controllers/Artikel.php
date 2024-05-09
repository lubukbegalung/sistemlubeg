<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KategoriModel;
use CodeIgniter\Controller;

class Artikel extends Controller
{
    protected $ArtikelModel;

    public function __construct()
    {
        $this->ArtikelModel = new ArtikelModel();
    }

    public function index()
    {
        // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
        $artikel = $this->ArtikelModel->findAll();
        $data = [
            'title' => 'Data Artikel',
            'artikel' => $artikel, // Correct variable name
        ];

        // Use correct view file name
        return view('layout/artikel', $data);
    }

    public function create()
    {
        $data = ['title' => 'Form Tambah Artikel'];
        return view('layout/createartikel', $data);
    }

    public function save()
    {
        // Use correct field names in insert
        $this->ArtikelModel->insert([
            'id_artikel' => $this->request->getVar('1'), // Correct field name
            'judul_artikel' => $this->request->getVar('2'),
            'status' => $this->request->getVar('3'), // Correct field name
            'isi_artikel' => $this->request->getVar('4'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan'); // Use lowercase 'pesan'
        return redirect()->to('/artikel'); // Use lowercase 'supplier'
    }

    public function delete($id_artikel)
    {
        $this->ArtikelModel->delete($id_artikel);
        session()->setFlashdata('pesan', 'Artikel Berhasil Dihapus');
        return redirect()->to(base_url('artikel'));
    }

    public function edit($id_artikel)
{
    // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
    $artikel = $this->ArtikelModel->find($id_artikel);

    if (empty($artikel)) {
        // Correct variable name
        return redirect()->to(base_url('artikel'))->with('error', 'artikel dengan ID ' . $id_artikel . ' tidak ditemukan')->withInput();
    }

    $data = [
        'title' => 'Form Edit artikel',
        'artikel' => $artikel, // Correct variable name
    ];

    // Use correct view file name
    return view('layout/editartikel', $data);
}

    public function update()
    {
        $id_artikel = $this->request->getVar('id_artikel');

        $this->ArtikelModel->update($id_artikel, [
            'judul_artikel' => $this->request->getVar('judul_artikel'),
            'status' => $this->request->getVar('status'),
            'isi_artikel' => $this->request->getVar('isi_artikel'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate'); // Use lowercase 'pesan'
        return redirect()->to('/artikel'); // Use lowercase 'supplier'
    }
    
}
