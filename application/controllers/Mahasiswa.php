<?php


class Mahasiswa extends CI_Controller{

    // gunakan constract untu kdipakai di controller ini bukan hanya dipakai pada methid tertentu
    public function __construct(){
        
        parent::__construct();
        // load modelnay terlebih dahulu
        $this->load->model('Mahasiswa_model');

        // karena form validation hanya dipakai mahasiswa maka aktifkan disini
        // aktifkan library nya
        $this->load->library('form_validation'); 
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

    // method crud untuk tambah data pada
    // view mahasiswa
    public function tambah(){

        // laman judul
        $data['judul'] = "Halaman Tambah Mahasiswa";

        // simpan diluar kondisinya
        // $this->form_validation->rules('name_input', 'Nama pesan kesalahan', 'rulesnya apa' );
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('hp', 'Hp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar');
            $this->load->view('mahasiswa/tambah');
            $this->load->view('templates/footer');
         }
         else{
            //  echo "berhasil formnya";
            // kalau sudah ok kita akan ambil data nya dan panggi lsebua mode 

            $this->Mahasiswa_model->tambahDataMahasiswa();

            // sebelum redirect set session dlu untuk menampilkan pesan sukses
            // $this->session->set_flashdata('nama_session', 'Ditambahkan');
            $this->session->set_flashdata('flash', 'Ditambahkan');

            // redirect ke controllernyaa
            redirect('mahasiswa');
         }
        
    }

    public function hapus($id){
        $this->Mahasiswa_model->hapusDataMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mahasiswa');
    }
}
 

?>