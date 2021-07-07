<?php 
namespace App\Models;

use CodeIgniter\Model;

class Berita extends Model{
    protected $table      = 'tb_berita';
    protected $returnType = "object";
    protected $allowedFields = ['*'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}