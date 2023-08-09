<?php

class Home extends Controllers
{
    public function index()
    {
        $data['title'] = "Home";
        $data['nama'] = $this->models('user_model')->get_user();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);
    }
}