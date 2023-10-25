<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
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
          'title'       => 'Product Dan Jasa',
          'product'    => $this->db->get('product')->result_array(),
          'company' => $this->db->get('company')->result_array(),
          'header_product' => $this->db->get('header_product')->result_array(),
          'footer_alamat_utama' => $this->db->get('footer_alamat_utama')->result_array(),
          'footer_alamat_cabang' => $this->db->get('footer_alamat_cabang')->result_array(),
          'social_network' => $this->db->get('social_network')->result_array(),
        ];
        // var_dump($data);
        $this->frontend->load('frontend/template', 'frontend/product/product', $data);
    }
}
