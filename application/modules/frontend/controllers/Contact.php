<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('Base_model', 'base');
        $this->load->helper('app');
    }

    public function index()
    {
        $data = [
            'title'       => 'Hubungi Kami',
            'contact'    => $this->db->get('contact')->result_array(),
            'company' => $this->db->get('company')->result_array(),
            'footer_alamat_utama' => $this->db->get('footer_alamat_utama')->result_array(),
            'footer_alamat_cabang' => $this->db->get('footer_alamat_cabang')->result_array(),
            'social_network' => $this->db->get('social_network')->result_array(),
        ];
        $this->frontend->load('frontend/template', 'frontend/contact/contact', $data);
    }

    public function add_action()
    {
        $post = $this->input->post(null, true);

        $config['upload_path']          = './assets/uploads/file/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|pdf|docs|csv|xls|rar|zip|xlsx';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 10000;
        $config['max_height']           = 10000;
        // $config['file_name']            = 'file-' . date('ymd') . '-' . substr(md5(rand()), 0, 6);

        $this->load->library('upload', $config);

        $params = [
            'nama_perusahaan' => $post['nama_perusahaan'],
            'nama_proyek'     => $post['nama_proyek'],
            'untuk_perhatian' => $post['untuk_perhatian'],
            'no_hp'           => $post['no_hp'],
            'email_pelanggan' => $post['email'],
            'nama_owner'      => $post['project_owner'],
            'jenis_proyek'    => $post['jenis_proyek'],
            'tanggal_mulai'   => $post['tanggal_mulai'],
            'tanggal_selesai' => $post['tanggal_selesai'],
            'sumber_dana'     => $post['sumber_dana'],
            'sektor'          => $post['sektor'],
            'koordinat'       => $post['koordinat'],
            'batching_jarak'  => $post['jarak'],
            'kebutuhan_produk' => $post['kebutuhan_produk']
        ];

        if ($post['suplai_select'] != 'other') {
            $params['suplai_batching'] = $post['suplai_select'];
        } else {
            $params['suplai_batching'] = $post['suplai_text'];
        }

        if ($post['pembayaran_select'] != 'other') {
            $params['metode_pembayaran'] = $post['pembayaran_select'];
        } else {
            $params['metode_pembayaran'] = $post['pembayaran_text'];
        }

        $rfq_id = $this->base->insert('rfq_request', $params);

        if (@$_FILES['file']['name'] != null) {
            if ($this->upload->do_upload('file')) {
                $post['file'] = $this->upload->data('file_name');
                $post['tipe_file'] = $this->upload->data('file_type');

                $params_file = [
                    'type'      => 'Header File',
                    'file'      => $post['file'],
                    'rfq_id'    => $rfq_id
                ];

                $this->base->insert('media', $params_file);

                if ($this->db->affected_rows() > 0) {
                    set_pesan('Rfq Terkirim, silahkan menunggu informasi lebih lanjut');
                } else {
                    set_pesan('Gagal menyimpan RFQ, silahkan coba kembali', FALSE);
                }
            } else {
                echo 'error';
            }
        } else {
            echo 'Testing';
        }

        redirect('contact');

    }
}
