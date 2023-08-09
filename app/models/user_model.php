<?php

class user_model
{

    // variabel visibilitas private
    private $nama = "ozaaa";

    // fungsi mendapatkan nilai user
    public function get_user(){
        // panggil variabel
        return $this->nama;
    }
}