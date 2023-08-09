<?php

class Siswa_model{

private $table = 'siswa';
private $db;

public function __construct()
{
    $this->db = new Database;
}

     public function get_all_siswa(){
        // return $this->siswa;
      $this->db->query('SELECT * FROM '.$this->table);
      return $this->db->result_set();
     }
}