<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $allowedFields = [
        'id_kategori',
        'nama_kategori',
        /* All other fields */
    ];

    // Aktifkan auto-increment

    // Opsional: Jika Anda ingin mengkustom format ID yang dihasilkan
    protected $useAutoIncrement = true;
    protected $autoIncrementType = 'int'; // Tipe data auto-increment
    protected $autoIncrementLength = 5; // Panjang ID auto-increment
    protected $autoIncrementStart = 1000; // Nilai awal ID auto-increment

    protected $primaryKey = 'id_kategori';

    // Retrieve all records from the 'kategori' table
    public function getKategori()
    {
        return $this->findAll();
    }
}
