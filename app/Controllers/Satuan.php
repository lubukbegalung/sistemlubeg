<?php namespace App\Controllers;

use App\Models\SatuanModel;
//use App\Models\UserModel;
 
class Satuan extends BaseController
{
    protected $SatuanModel;
    public function __construct()
    {
        $this->SatuanModel=new SatuanModel();
    }
    public function index()
    {
        //$data = $SatuanModel->getSatuan();
        $satuan=$this->SatuanModel->findAll();
        // $satuan = new SatuanModel();
        $data=['title'=>'Data Satuan',
        'satuan'=>$satuan];
        
        return view('layout/satuan', $data);
    }
    public function create(){
        $data=['title'=>'Form Tambah Satuan'];
        return view('layout/tambahsatuan',$data);
    }
    public function save()
    {
        $this->SatuanModel->insert([
            'id_kategori' => $this->request->getVar('1'),
            
            'nama_kategori' => $this->request->getVar('2')
        ]);
        session()->setFlashdata('Pesan','Data berhasil ditambahkan');
        return redirect()->to('/satuan');
        
    }
    
    public function delete($id_satuan)
    {
        //model initialize
        $satuan= new SatuanModel();
        $satuan->delete($id_satuan);
        $satuan=$this->SatuanModel->find($id_satuan);
         $this->SatuanModel->delete($id_satuan);
         return redirect()->to(base_url('satuan'));
         if($satuan) {
            $this->SatuanModel->delete($id_satuan);
        //     // 

        //     //flash message
            session()->setFlashdata('pesan', 'Satuan Berhasil Dihapus');

            return redirect()->to(base_url('satuan'));
         }

    }
    public function edit(){
        $data=['title'=>'Form edit Satuan'];

        return view('layout/edit',$data);
        $SatuanModel = new SatuanModel();
        $kategori = $_GET['id_kategori'];
        $kategori = $SatuanModel->find();

       
    }
    

    public function update()
    {
       
        $this->SatuanModel->insert([
            'id_kategori' => $this->request->getVar('1'),
            
            'nama_kategori' => $this->request->getVar('2')
        ]);
        session()->setFlashdata('Pesan','Data berhasil diubah');
        return redirect()->to('/satuan');
        
    }
}