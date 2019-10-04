<?php


class Mahasiswa extends CI_Controller{

    // gunakan constract untu kdipakai di controller ini bukan hanya dipakai pada methid tertentu
    public function __construct(){
        
        parent::__construct();
        // load modelnay terlebih dahulu
        $this->load->model('Mahasiswa_model');

    }

    // halaman index.php
    // dengan method index
    public function index(){

        $data['judul'] = 'Halaman Mahasiswa';

        // mengelola data mahasissa dengan manggunakan model
        // dan memanggil methid getAllMahasiswa
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');

    }
}
 

?>