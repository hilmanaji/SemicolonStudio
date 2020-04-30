<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    private $role_user, $id_sekolah, $kondisi;
    private $nama_tabel = 'tbl_artikel';

    // function __construct() {
    //     parent::__construct();
    //     if (!$this->session->has_userdata('id_user')) {
    //         redirect('Login');
    //     }
    //     else{
    //         $id_user = $this->session->userdata('id_user');
    //         $this->role_user = $this->session->userdata('role_user');
    //         $this->id_sekolah = $this->session->userdata('id_sekolah');
    //     }
    //     if ($this->role_user === '2') {
    //         $kondisi = "AND ".$this->nama_tabel.".id_sekolah = '".$this->id_sekolah."'";
    //         $this->kondisi = $kondisi;
    //     }
    //     else{
    //         $this->kondisi = '';
    //     }
    // }

    public function index()
    {
        $this->template->front_end('front_end/v_blog');
    }


}

