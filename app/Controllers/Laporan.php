<?php

namespace App\Controllers;

use App\Models\LaporanModel;

use CodeIgniter\Controller;

class Laporan extends Controller
{
    protected $LaporanModel;

    public function __construct()
    {
        $this->LaporanModel = new LaporanModel();
    }

    public function index()
    {
        // Mendapatkan semua data laporan dari model
        $laporan = $this->LaporanModel->findAll();
    
        // Mendapatkan status edit dari database untuk entitas tertentu (misalnya, id tertentu)
        $status = 1; // Gantilah dengan id entitas yang sesuai
        $status = $this->LaporanModel->getEditStatus($status);
    
        // Jika status tidak ditemukan, gunakan nilai default
        if ($status === null) {
            $status = 0; // Misalnya, asumsikan status default adalah tidak tercentang
        }
    
        // Menyiapkan data untuk view
        $data = [
            'title' => 'Data Inputan Surat',
            'laporan' => $laporan,
            'status' => $status, // Sertakan status dalam data
        ];
    
        // Memuat view dan memasukkan data ke dalamnya
        return view('layout/laporan', $data);
    }
    





    public function create()
    {
      $LaporanModel=new LaporanModel();
       
        $data = [
            'title' => 'Form Tambah Kategori',];

        return view('layout/createlaporan', $data);
    }
        
    

    
   // Controller: Controller.php

// Controller: Controller.php

public function save()
{
    // Tangkap nilai checkbox dari $_POST
    $status = $this->request->getPost('edit') ? 1 : 0;

    // Simpan nilai checkbox ke dalam database menggunakan model
    $this->LaporanModel->saveCheckboxStatus($status);

    // Ambil status dari database
    $data['editStatus'] = $this->LaporanModel->getEditStatus();

    // Tampilkan halaman laporan dan teruskan data status checkbox
    session()->setFlashdata('pesan', 'Data Berhasil Diedit');
    return redirect()->to(base_url('laporan'));
}



    public function delete($nik)
    {
        $this->LaporanModel->delete($nik);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('laporan'));
    }

    public function edit($nik)
{
    // Use correct variable name $supplier (lowercase) instead of $Supplier (uppercase)
    $laporan = $this->LaporanModel->find($nik);

    if (empty($nik)) {
        // Correct variable name
        return redirect()->to(base_url('laporan'))->with('error', 'Kategori dengan ID ' . $nik . ' tidak ditemukan')->withInput();
    }

    $data = [
        'title' => 'Form Edit kategori',
        'laporan' => $laporan, // Correct variable name
    ];

    // Use correct view file name
    return view('layout/editlaporan', $data);
}

    public function update()
    {
     
        $nik = $this->request->getVar('nik');

        $this->LaporanModel->update($nik, [
            'nama' => $this->request->getVar('nama'),
            'ttl'=> $this->request->getVar('ttl'),
            'alamat'=> $this->request->getVar('alamat'),
            'RT'=> $this->request->getVar('RT'),
            'kep'=> $this->request->getVar('kep'),
            'status'=> $this->request->getVar('status'),
            
        ]);

        session()->setFlashdata('pesan', 'Data Kategori berhasil diupdate'); // Use lowercase 'pesan'
        return redirect()->to('/laporan'); // Use lowercase 'supplier'
    }
    
}
