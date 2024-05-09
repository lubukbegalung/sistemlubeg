<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SatuanModel extends Model
{
    protected $table = 'kategori';
    protected $allowedFields = [
        'id_kategori',
        'nama_kategori',
        /* All other fields */
    ];

  protected $primaryKey = 'id_kategori';
    public function getSatuan()
    {
        return $this->findAll();
    }
 
}