<?php 
namespace App\Models;

use CodeIgniter\Model;

class Berita extends Model{
	protected $DBGroup              = 'default';
    protected $table      = 'tb_berita';
    protected $returnType = "object";
    protected $allowedFields = ['judul_berita', 'isi', 'slug', 'id_berita', 'cover_berita'];
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
}