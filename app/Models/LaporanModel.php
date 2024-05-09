<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';

    public function getEditStatus()
    {
        // Gantilah 'nama_kolom_status' dengan nama kolom yang sesuai di dalam tabel 'laporan'
        $query = $this->db->table($this->table)->get()->getRow();
        return $query ? $query->status : null;
    }
    public function saveCheckboxStatus($status)
    {
        // Simpan nilai checkbox ke dalam database
        $this->db->table($this->table)->update(['status' => $status]);
    }
   
    protected $allowedFields = [
        'nama',
        'nik',
        'ttl',
        'alamat',
        'RT',
        'kep',
        'status',
     
        
        /* All other fields */
    ];
   protected $primaryKey = 'nik';

    // Retrieve all records from the 'laporan' table
    public function getLaporan()
    {
        return $this->findAll();
    }
}
    