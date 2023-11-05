<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error404 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {

        // $data = [
        //     'title' => 'Tentang Perusahaan',
        //     'company' => $this->db->get('company')->result_array(),
        //     'pimpinan' => $this->db->get('pimpinan')->result_array(),
        //     'struktur_organisasi' => $this->db->get('struktur_organisasi')->result_array(),
        //     'footer_alamat_utama' => $this->db->get('footer_alamat_utama')->result_array(),
        //     'footer_alamat_cabang' => $this->db->get('footer_alamat_cabang')->result_array(),
        //     'social_network' => $this->db->get('social_network')->result_array(),
        // ];
        // var_dump($data);
        $this->load->view('notfound');
    }
}