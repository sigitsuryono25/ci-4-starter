<?php

namespace App\Controllers;

class Berita extends BaseController
{

    public function index()
    {
        $data['berita'] =  $this->beritaModel->get()->getResult();
        $master['page'] = view('berita/page-berita', $data);
        return view("master-page", $master);
    }

    public function formBerita()
    {
        $master['page'] = view('berita/form-berita');
        return view("master-page", $master);
    }

    public function prosesInsert()
    {
        $judulBerita = $this->request->getPost('judul_berita');
        $isiBerita = $this->request->getPost('isi_berita');
        $cover = $this->request->getFile('cover');

        if (!$cover->isValid() && $cover->hasMoved()) {
            return die("something wrong with file");
        }
        $path = "./assets/berita/";
        if (!is_dir($path)) {
            mkdir($path, 0775, true);
        }
        $name = $cover->getRandomName();
        $moved = $cover->move($path, $name);
        if ($moved) {
            $data = [
                'judul_berita' => $judulBerita,
                'isi' => $isiBerita,
                'slug' => "",
                'cover_berita' => $path.$name
            ];
            $d = $this->beritaModel->insert($data);
            if ($d) {
                return redirect()->route('berita');
            } else {
                return die("Oppss.. ada yang salah");
            }
        } else {
            return die("ooppss.. terjadi kesalahan saat upload files");
        }
    }
}
