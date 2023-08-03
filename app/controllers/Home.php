<?php

class Home extends Controllers
{
    public function index()
    {
        $data['title'] = "Home";
        
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);
    }
}