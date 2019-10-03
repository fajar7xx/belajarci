<?php

// nama class home
class Home extends CI_Controller{

    // method defaultnya index
    public function index(){
        
        // debug apa bisa tampi latau kgk
        // echo 'home/index';

        // panggil view nya
        // artinya adla cari sebuah file yang namanya home.php
        // yang ada di folder views
        // $this->load->view('home');

        // artinya adla cari sebuah file yang namanya index.php
        // yang ada di folder home di dlam folder   views
        $this->load->view('home/index');
    }

}


?>