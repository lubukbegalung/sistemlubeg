<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = [
        'id_artikel',
        'judul_artikel',
        'status',
        'isi_artikel',
        
        /* All other fields */
    ];

    protected $primaryKey = 'id_artikel';

    // Retrieve all records from the 'barang' table
    public function getArtikel()
    {
        return $this->findAll();
    }
}
    