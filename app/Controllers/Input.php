<?php

namespace App\Controllers;

use App\Models\InputModel;
use CodeIgniter\Controller;

class Input extends Controller
{
    protected $InputModel;

    public function __construct()
    {
        $this->InputModel = new InputModel();
    }

    public function index()
    {
        // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
        $input = $this->InputModel->findAll();
        $data = [
            'title' => 'Data Input',
            'input' => $input, // Correct variable name
        ];

        // Use correct view file name
        return view('layout/input', $data);
    }

    public function create()
    {
      $InputModel=new InputModel();
       
        $data = [
            'title' => 'Form Tambah Kategori',];

        return view('layout/createlaporan', $data);
    }
        
    

    
    public function save()
    {
        // Use correct field names in insert
        $this->InputModel->insert([
            'nama'=> $this->request->getVar('1'), // Correct field name
            'nik'=> $this->request->getVar('2'), // Correct field name
            'ttl'=> $this->request->getVar('3'), // Correct field name
            'pekerjaan'=> $this->request->getVar('4'), // Correct field name
            'alamat'=> $this->request->getVar('5'), // Correct field name
            'RT'=> $this->request->getVar('6'), // Correct field name
            'kep'=> $this->request->getVar('7'), // Correct field name
            'status'=> $this->request->getVar('8'), // Correct field name
          
        ]);
        session()->setFlashdata('pesan', 'Data Kategori berhasil ditambahkan'); // Use lowercase 'pesan'
        return redirect()->to('/input'); // Use lowercase 'supplier'
    }

    public function delete($nik)
    {
        $this->InputModel->delete($nik);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('input'));
    }

    public function edit($nik)
{
    // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
    $input = $this->InputModel->find($nik);

    if (empty($nik)) {
        // Correct variable name
        return redirect()->to(base_url('input'))->with('error', 'input dengan id ' . $nik . ' tidak ditemukan')->withInput();
    }

    $data = [
        'title' => 'Form Edit kategori',
        'nik' => $nik, // Correct variable name
    ];

    // Use correct view file name
    return view('laporan', $data);
}

    public function update()
    {
        $status = $this->request->getVar('status');

        $this->InputModel->update($status, [
            'nama' => $this->request->getVar('nama'),
            
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diupdate'); // Use lowercase 'pesan'
        return redirect()->to('/laporan'); // Use lowercase 'supplier'
    }
    
}
