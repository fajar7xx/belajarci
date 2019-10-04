<?php


class Mahasiswa_model extends CI_Model{

    // method getAllMahasiswa
    public function getAllMahasiswa(){
        // echo 'Data Mahasiswa';

        // cara manggil data ke database
        $query = $this->db->get('mahasiswa');

        // cara menampilan database dengan result
        // jika array menggunakan result_array
        // klo object pake result objek
        return $query->result_array();

        // alternatif dari code diatas bisa menggunakan method chaining
        // return $this->db->get('mahasiswa')->result_array();
    }
}


?>