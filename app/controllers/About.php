<?php

class About extends Controllers
{
    public function index($nama = "Nanda", $profesi = "Siswa", $umur = "16")
    {
        $data['title'] = "About";
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['umur'] = $umur;

        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer', $data);
    }
}