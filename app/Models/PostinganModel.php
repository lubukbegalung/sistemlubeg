<?php

namespace App\Models;

use CodeIgniter\Model;

class PostinganModel extends Model
{
    protected $table = 'postingan_kategori';
    protected $allowedFields = [
        'id_artikel',
        'id_kategori',
        'tgl_posting',
        'username',
        'link',
       
        
        /* All other fields */
    ];

    protected $primaryKey = 'id_artikel';

    // Retrieve all records from the 'barang' table
    public function getPostingan()
    {
        return $this->findAll();
    }
}
    