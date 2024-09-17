<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelpengembalian extends Model
{
    protected $table            = 'pengembalian';
    protected $primaryKey       = 'PeminjamanID';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['UserID', 'BukuID','Tanggal_Pengembalian'];

    
    
}
