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

    public function tambahDataMahasiswa(){
        $data = [

            // insert dengan anti ddos
            "nm_mhs" => $this->input->post('nama', TRUE),
            "nim" => $this->input->post('nim', TRUE),
            "alamat" => $this->input->post('alamat', TRUE),
            "no_hp" => $this->input->post('hp', TRUE),
            "email" => $this->input->post('email', TRUE),
            "jurusan" => $this->input->post('jurusan', TRUE)
        ];

        // masukkan ke table
        $this->db->insert('mahasiswa', $data);
    }

    public function hapusDataMahasiswa($id){
        // buat fungsi hapus dalam method ini
        // hapus berdasarkan id
        $this->db->where('id_mhs', $id);
        // hapus table berdasar where kondisi 
        $this->db->delete('mahasiswa');
    }
}


?>