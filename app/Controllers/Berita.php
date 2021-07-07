<?php 
namespace App\Controllers;

class Berita extends BaseController{
    public function index()
    {
        $data['berita'] =  $this->beritaModel->get()->getResult();
        $master['page'] = view('berita/page-berita', $data);
        return view("master-page", $master);
    }
}