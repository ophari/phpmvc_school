<?php

class siswa extends Controllers{

    public function index(){
        $data['judul']= "siswa";
        $data['title']= "siswa";
        $data['siswa']= $this->models('Siswa_model')->get_all_siswa();

        $this->view('template/header', $data);
        $this->view('siswa/index', $data);
        $this->view('template/footer', $data);

    }
}