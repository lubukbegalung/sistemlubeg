<?php

namespace App\Controllers;

class Pages extends BaseController
{
   
    public function index() {
        echo view('layout/header');
        
    }
    public function tes()
    {
        echo "Ini tes ya guys";
    }
}