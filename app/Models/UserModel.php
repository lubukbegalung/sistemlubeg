<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = [
        'iduser',
        'namauser',
        'username',
        'password',
        'level',
        /* All other fields */
    ];

    protected $primaryKey = 'iduser';

    // Retrieve all records from the 'barang' table
    public function getUser()
    {
        return $this->findAll();
    }
}
    