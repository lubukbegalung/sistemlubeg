<?php

namespace App\Controllers;
use App\Models\ArtikelModel;
use App\Models\KategoriModel;
class Home extends BaseController
{
    public function index(): string
    {
    
        return view('layout/login');
    }
}
