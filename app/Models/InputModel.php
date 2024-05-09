<?php

namespace App\Models;

use CodeIgniter\Model;

class InputModel extends Model
{
    protected $table = 'laporan';
    protected $allowedFields = [
        'nama',
        'nik',
        'ttl',
        'alamat',
        'pekerjaan',
        'RT',
        'kep',
        'status',
     
        
        /* All other fields */
    ];
   protected $primaryKey = 'nik';

    // Retrieve all records from the 'barang' table
    public function getInput()
    {
        return $this->findAll();
    }
}
    