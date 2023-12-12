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

    $phone = $this->db->select('no_hp')->get('footer_alamat_utama')->result_array();
    $editNo = $this->tambahkanTanda($phone[0]['no_hp']);

    $data = [
      'title' => 'Detail Portfolio',
      'detail_portfolio' => $detail_portfolio,
      'company' => $this->db->get('company')->result_array(),
      'footer_alamat_utama' => $this->db->get('footer_alamat_utama')->result_array(),
      'footer_alamat_cabang' => $this->db->get('footer_alamat_cabang')->result_array(),
      'social_network' => $this->db->get('social_network')->result_array(),
      'phone' => $editNo,
    ];

    // $dd = [
    //   'detail_portfolio' => $detail_portfolio,
    // ];
    // var_dump($dd);

    // Memuat view dengan data yang telah disiapkan
    $this->frontend->load('frontend/template', 'frontend/detail_portfolio/detail_portfolio', $data);
  }

  private function tambahkanTanda($teks)
  {
    $panjang = strlen($teks);
    $hasil = '';

    for ($i = 0; $i < $panjang; $i++) {
      // Tambahkan tanda - setiap 2 karakter setelah karakter pertama
      if ($i == 2) {
        $hasil .= '-';
      }

      // Tambahkan tanda - setiap 4 karakter setelah karakter kedua
      if ($i == 6) {
        $hasil .= '-';
      }

      // Tambahkan tanda - setiap 4 karakter setelah karakter keenam
      if ($i == 10) {
        $hasil .= '-';
      }

      // Tambahkan karakter ke hasil
      $hasil .= $teks[$i];
    }
    return $hasil;
  }
}