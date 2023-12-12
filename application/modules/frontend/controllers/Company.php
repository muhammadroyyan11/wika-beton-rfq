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
        $phone = $this->db->select('no_hp')->get('footer_alamat_utama')->result_array();
        $editNo = $this->tambahkanTanda($phone[0]['no_hp']);

        $data = [
            'title' => 'Tentang Perusahaan',
            'company' => $this->db->get('company')->result_array(),
            'pimpinan' => $this->db->get('pimpinan')->result_array(),
            'struktur_organisasi' => $this->db->get('struktur_organisasi')->result_array(),
            'footer_alamat_utama' => $this->db->get('footer_alamat_utama')->result_array(),
            'footer_alamat_cabang' => $this->db->get('footer_alamat_cabang')->result_array(),
            'social_network' => $this->db->get('social_network')->result_array(),
            'phone' => $editNo,
        ];
        // var_dump($data);
        $this->frontend->load('frontend/template', 'frontend/company/company', $data);
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