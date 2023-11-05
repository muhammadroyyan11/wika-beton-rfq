<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portfolio_Detail extends CI_Controller
{

    public function __construct()
    {
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
      $this->load->model('Base_model', 'base');
    }

    public function index()
    {
      // Mengambil nilai ID portofolio dari query string
      $portfolio_id = $this->input->get('id');

      // Mengambil data portofolio berdasarkan ID dari database
      $detail_portfolio = $this->db->get_where('portfolio', ['id' => $portfolio_id])->row_array();

      var_dump($detail_portfolio);

      // Jika portofolio dengan ID tertentu tidak ditemukan, Anda bisa mengatasi kasus ini
      // if (!$detail_portfolio) {
      //   show_404(); // Menampilkan halaman error 404
      //   return;
      // }

      // Data lain yang Anda ingin lewatkan ke view
      $data = [
        'title' => 'Detail Portfolio',
        'detail_portfolio' => $detail_portfolio,
        'company' => $this->db->get('company')->result_array(),
        'footer_alamat_utama' => $this->db->get('footer_alamat_utama')->result_array(),
        'footer_alamat_cabang' => $this->db->get('footer_alamat_cabang')->result_array(),
        'social_network' => $this->db->get('social_network')->result_array(),
      ];

      // $dd = [
      //   'detail_portfolio' => $detail_portfolio,
      // ];
      // var_dump($dd);

      // Memuat view dengan data yang telah disiapkan
      $this->frontend->load('frontend/template', 'frontend/detail_portfolio/detail_portfolio', $data);
    }
}