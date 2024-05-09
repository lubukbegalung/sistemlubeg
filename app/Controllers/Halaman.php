<?php

namespace App\Controllers;

class Halaman extends BaseController
{
   
    public function index() {
        $data=['title'=> 'Home | Cafe-Anisya'];
        //echo view('layout/header',$data);

        echo view('home',$data);
        //echo view('layout/footer');
        
    }
    public function satuan() {
        $data=['title'=> 'Satuan | Cafe-Anisya'];
        echo view('layout/header',$data);

        echo view('layout/satuan');
        echo view('layout/footer');
        
    }
}