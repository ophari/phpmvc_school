<?php

class siswa extends Controllers{

    public function index(){
        $data['title']= "siswa";
        $data['siswa']= $this->models('Siswa_model')->get_all_siswa();

        $this->view('template/header', $data);
        $this->view('siswa/index', $data);
        $this->view('template/footer', $data);

    }

    public function detail($id){
        $data['title']= "siswa";
        $data['siswa']= $this->models('Siswa_model')->get_siswa_id($id);

        $this->view('template/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('template/footer', $data);
    }
    
    public function tambah(){
        if($this->models('Siswa_model')->tambah_data_siswa($_POST) > 0){
            header('location: '.BASE_URL.'/siswa');
            exit;
        }else{
            echo "data gagal data di simpan";
        }
    }
}