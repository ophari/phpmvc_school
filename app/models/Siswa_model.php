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

     public function get_siswa_id($id){
      $this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
      $this->db->bind('id', $id);
      return $this->db->result_single();
     }

     public function tambah_data_siswa($data){
      $query = "INSERT INTO siswa VALUES ('',:nama, :nis, :email, :jurusan)";
      $this->db->query($query);
      $this->db->bind('nama', $data['nama']);
      $this->db->bind('nis', $data['nis']);
      $this->db->bind('email', $data['email']);
      $this->db->bind('jurusan', $data['jurusan']);
      $this->db->execute();

      return $this->db->row_count();
     }
} 