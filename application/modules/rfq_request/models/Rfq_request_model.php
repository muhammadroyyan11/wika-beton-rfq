<?php defined('BASEPATH') or exit('No direct script access allowed');

/*| --------------------------------------------------------------------------*/
/*| dev : royyan  */
/*| version : V.0.0.2 */
/*| facebook :  */
/*| fanspage :  */
/*| instagram :  */
/*| youtube :  */
/*| --------------------------------------------------------------------------*/
/*| Generate By M-CRUD Generator 19/10/2023 16:09*/
/*| Please DO NOT modify this information*/

class Rfq_request_model extends MY_Model
{
    private $table = 'rfq_request';
    private $primary_key = 'id';
    private $column_order = ['id', 'no_penawaran', 'status_penawaran', 'pelanggan', 'nama_perusahaan', 'nama_proyek', 'nama_owner', 'untuk_perhatian', 'email_pelanggan', 'no_hp', 'kebutuhan_produk', 'suplai_batching', 'sumber_dana', 'sektor', 'jenis_proyek', 'tanggal_mulai', 'tanggal_selesai', 'koordinat', 'batching_jarak', 'metode_pembayaran', 'deadline', 'sbu', 'npp', 'wilayah', 'omzet_kontrak', 'omzet_penjualan', 'termin', 'tindak_lanjut', 'status_gagal'];
    private $order = ['rfq_request.id' => 'ASC'];
    private $select = 'rfq_request.id,rfq_request.no_penawaran,rfq_request.status_penawaran,rfq_request.pelanggan,rfq_request.nama_perusahaan,rfq_request.nama_proyek,rfq_request.nama_owner,rfq_request.untuk_perhatian,rfq_request.email_pelanggan,rfq_request.no_hp,rfq_request.kebutuhan_produk,rfq_request.suplai_batching,rfq_request.sumber_dana,rfq_request.sektor,rfq_request.jenis_proyek,rfq_request.tanggal_mulai,rfq_request.tanggal_selesai,rfq_request.koordinat,rfq_request.batching_jarak,rfq_request.metode_pembayaran,rfq_request.deadline,rfq_request.sbu,rfq_request.npp,rfq_request.wilayah,rfq_request.omzet_kontrak,rfq_request.omzet_penjualan,rfq_request.termin,rfq_request.tindak_lanjut,rfq_request.status_gagal';

    public function __construct()
    {
        $config = [
            'table' => $this->table,
            'primary_key' => $this->primary_key,
            'select' => $this->select,
            'column_order' => $this->column_order,
            'order' => $this->order,
        ];

        parent::__construct($config);
    }

    private function _get_datatables_query()
    {
        $this->db->select($this->select);
        $this->db->from($this->table);

        if ($this->input->post('no_penawaran')) {
            $this->db->like('rfq_request.no_penawaran', $this->input->post('no_penawaran'));
        }

        if ($this->input->post('nama_perusahaan')) {
            $this->db->like('rfq_request.nama_perusahaan', $this->input->post('nama_perusahaan'));
        }

        if ($this->input->post('nama_proyek')) {
            $this->db->like('rfq_request.nama_proyek', $this->input->post('nama_proyek'));
        }

        if ($this->input->post('nama_owner')) {
            $this->db->like('rfq_request.nama_owner', $this->input->post('nama_owner'));
        }

        if ($this->input->post('untuk_perhatian')) {
            $this->db->like('rfq_request.untuk_perhatian', $this->input->post('untuk_perhatian'));
        }

        if ($this->input->post('email_pelanggan')) {
            $this->db->like('rfq_request.email_pelanggan', $this->input->post('email_pelanggan'));
        }

        if ($this->input->post('no_hp')) {
            $this->db->like('rfq_request.no_hp', $this->input->post('no_hp'));
        }

        if ($this->input->post('kebutuhan_produk')) {
            $this->db->like('rfq_request.kebutuhan_produk', $this->input->post('kebutuhan_produk'));
        }

        if ($this->input->post('suplai_batching')) {
            $this->db->like('rfq_request.suplai_batching', $this->input->post('suplai_batching'));
        }

        if ($this->input->post('jarak')) {
            $this->db->like('rfq_request.jarak', $this->input->post('jarak'));
        }

        if ($this->input->post('sumber_dana')) {
            $this->db->like('rfq_request.sumber_dana', $this->input->post('sumber_dana'));
        }

        if ($this->input->post('sektor')) {
            $this->db->like('rfq_request.sektor', $this->input->post('sektor'));
        }

        if ($this->input->post('jenis_proyek')) {
            $this->db->like('rfq_request.jenis_proyek', $this->input->post('jenis_proyek'));
        }

        if ($this->input->post('tanggal_mulai')) {
            $this->db->like('rfq_request.tanggal_mulai', date('Y-m-d', strtotime($this->input->post('tanggal_mulai'))));
        }

        if ($this->input->post('tanggal_selesai')) {
            $this->db->like('rfq_request.tanggal_selesai', date('Y-m-d', strtotime($this->input->post('tanggal_selesai'))));
        }

        if ($this->input->post('koordinat')) {
            $this->db->like('rfq_request.koordinat', $this->input->post('koordinat'));
        }

        if ($this->input->post('batching_jarak')) {
            $this->db->like('rfq_request.batching_jarak', $this->input->post('batching_jarak'));
        }

        if ($this->input->post('metode_pembayaran')) {
            $this->db->like('rfq_request.metode_pembayaran', $this->input->post('metode_pembayaran'));
        }

        if ($this->input->post('deadline')) {
            $this->db->like('rfq_request.deadline', $this->input->post('deadline'));
        }

        if ($this->input->post('sbu')) {
            $this->db->like('rfq_request.sbu', $this->input->post('sbu'));
        }

        if ($this->input->post('npp')) {
            $this->db->like('rfq_request.npp', $this->input->post('npp'));
        }

        if ($this->input->post('wilayah')) {
            $this->db->like('rfq_request.wilayah', $this->input->post('wilayah'));
        }

        if ($this->input->post('omzet_kontrak')) {
            $this->db->like('rfq_request.omzet_kontrak', $this->input->post('omzet_kontrak'));
        }

        if ($this->input->post('omzet_penjualan')) {
            $this->db->like('rfq_request.omzet_penjualan', $this->input->post('omzet_penjualan'));
        }

        if ($this->input->post('termin')) {
            $this->db->like('rfq_request.termin', $this->input->post('termin'));
        }

        if ($this->input->post('tindak_lanjut')) {
            $this->db->like('rfq_request.tindak_lanjut', $this->input->post('tindak_lanjut'));
        }

        if ($this->input->post('status_gagal')) {
            $this->db->like('rfq_request.status_gagal', $this->input->post('status_gagal'));
        }

        if (isset($_POST['order'])) {
            // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } elseif (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get($where = null)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        if ($where != null) {
            $this->db->where($where);
        }
        return $this->db->get();
    }

    public function edit($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $this->db->order_by('createdOn', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->select($this->select);
        $this->db->from("$this->table");
        return $this->db->count_all_results();
    }

    function get_file($where = null)
    {
        $this->db->select('*');
        $this->db->from('media');
        if ($where != null) {
            $this->db->where('rfq_id', $where);
        }
        return $this->db->get();
    }

    function get_all_id()
    {
        $this->db->select('id_user');
        $this->db->from('auth_user');
        return $this->db->get();
    }
}

/* End of file Rfq_request_model.php */
/* Location: ./application/modules/rfq_request/models/Rfq_request_model.php */
