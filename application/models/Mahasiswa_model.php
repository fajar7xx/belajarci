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

    // mehot hapus data berdasarkan kondisi where
    public function hapusDataMahasiswa($id){
        // buat fungsi hapus dalam method ini
        // hapus berdasarkan id
        // $this->db->where('id_mhs', $id);
        // hapus table berdasar where kondisi 
        // $this->db->delete('mahasiswa');

        // cara ke2
        $this->db->delete('mahasiswa', ['id_mhs'=>$id]); 
    }

    // method shoa all data where id class 
    public function getMahasiswaById($id){
        // cari dara bedasarkan id parameter
        // $query = $this->db->get_where('mahasiswa', ['id_mhs' => $id]);
        
        return $this->db->get_where('mahasiswa', ['id_mhs' => $id])->row_array();
    }

    // method ubah data mahasiswa?
    public function ubahMahasiswaById($id){
        $data = [

            // insert dengan anti ddos
            
            "nm_mhs" => $this->input->post('nama', TRUE),
            "nim" => $this->input->post('nim', TRUE),
            "alamat" => $this->input->post('alamat', TRUE),
            "no_hp" => $this->input->post('hp', TRUE),
            "email" => $this->input->post('email', TRUE),
            "jurusan" => $this->input->post('jurusan', TRUE)
        ];

        $this->db->where('id_mhs', $this->input->post('id', TRUE));
        $this->db->update('mahasiswa', $data);
    }

    // mehtod pencarian data
    public function cariDataMahasiswa(){

        $keyword = $this->input->post('keyword', TRUE);

        // mencari data berdasarkan apa yang input pada tombol input
        $this->db->like('nm_mhs', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('no_hp', $keyword);

        // jalankan query pencarian
        return $this->db->get('mahasiswa')->result_array();

    }
}


?>