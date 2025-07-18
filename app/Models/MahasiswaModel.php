<?php
namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nim', 'jurusan', 'jenis_kelamin', 'alamat'];
    protected $useTimestamps = true;
}
