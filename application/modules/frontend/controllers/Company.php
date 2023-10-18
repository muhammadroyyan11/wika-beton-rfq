<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
    }

    public function index()
    {

        $data = [
            'title' => 'Tentang Perusahaan',
            'company' => $this->db->get('company')->result_array(),
            'pimpinan' => $this->db->get('pimpinan')->result_array(),
        ];
        // var_dump($data);
        $this->frontend->load('frontend/template', 'frontend/company/company', $data);
    }
}