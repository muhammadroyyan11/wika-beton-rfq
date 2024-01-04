<?php defined('BASEPATH') or exit('No direct script access allowed');
/*| --------------------------------------------------------------------------*/
/*| dev : royyan  */
/*| version : V.0.0.2 */
/*| facebook :  */
/*| fanspage :  */
/*| instagram :  */
/*| youtube :  */
/*| --------------------------------------------------------------------------*/
/*| Generate By M-CRUD Generator 12/12/2023 17:07*/
/*| Please DO NOT modify this information*/

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel_export extends Backend
{
    private $title = 'Rfq Request';

    public function __construct()
    {
        $config = [
            'title' => $this->title,
        ];
        parent::__construct($config);
        $this->load->model('Rfq_request_model', 'model');
        $this->load->model('Base_model', 'base');
    }

    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set headers
        $sheet->setCellValue('A1', 'RESUME MONIOR PENAWARAN');
        $sheet->mergeCells('A1:AX');
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('A1')->getFont()->setSize(20); 
        
        $sheet->setCellValue('A3', 'id');
        $sheet->setCellValue('B3', 'no_penawaran');
        $sheet->setCellValue('C3', 'status_penawaran');
        $sheet->setCellValue('D3', 'pelanggan');
        $sheet->setCellValue('E3', 'nama_perusahaan');
        $sheet->setCellValue('F3', 'nama_proyek');
        $sheet->setCellValue('G3', 'nama_owner');
        $sheet->setCellValue('H3', 'untuk_perhatian');
        $sheet->setCellValue('I3', 'email_pelanggan');
        $sheet->setCellValue('J3', 'no_hp');
        $sheet->setCellValue('K3', 'kebutuhan_produk');
        $sheet->setCellValue('L3', 'suplai_batching');
        $sheet->setCellValue('M3', 'jarak');
        $sheet->setCellValue('N3', 'sumber_dana');
        $sheet->setCellValue('O3', 'sektor');
        $sheet->setCellValue('P3', 'jenis_proyek');
        $sheet->setCellValue('Q3', 'tanggal_mulai');
        $sheet->setCellValue('R3', 'tanggal_selesai');
        $sheet->setCellValue('S3', 'koordinat');
        $sheet->setCellValue('T3', 'batching_jarak');
        $sheet->setCellValue('U3', 'metode_pembayaran');
        $sheet->setCellValue('V3', 'createdOn');
        $sheet->setCellValue('W3', 'tindak_lanjut');
        $sheet->setCellValue('X3', 'status_gagal');

        // Set Value
        $list = $this->model->get();
        $row = 4; 
        foreach ($list as $data) {
            $sheet->setCellValue('A' . $row, $data['nis']);
            $sheet->setCellValue('B' . $row, $data['nis']);
            $sheet->setCellValue('C' . $row, $data['nis']);
            $sheet->setCellValue('D' . $row, $data['nis']);
            $sheet->setCellValue('E' . $row, $data['nis']);
            $sheet->setCellValue('F' . $row, $data['nis']);
            $sheet->setCellValue('G' . $row, $data['nis']);
            $sheet->setCellValue('H' . $row, $data['nis']);
            $sheet->setCellValue('I' . $row, $data['nis']);
            $sheet->setCellValue('J' . $row, $data['nis']);
            $sheet->setCellValue('K' . $row, $data['nis']);
            $sheet->setCellValue('L' . $row, $data['nis']);
            $sheet->setCellValue('M' . $row, $data['nis']);
            $sheet->setCellValue('N' . $row, $data['nis']);
            $sheet->setCellValue('O' . $row, $data['nis']);
            $sheet->setCellValue('P' . $row, $data['nis']);
            $sheet->setCellValue('Q' . $row, $data['nis']);
            $sheet->setCellValue('R' . $row, $data['nis']);
            $sheet->setCellValue('S' . $row, $data['nis']);
            $sheet->setCellValue('T' . $row, $data['nis']);
            $sheet->setCellValue('U' . $row, $data['nis']);
            $sheet->setCellValue('V' . $row, $data['nis']);
            $sheet->setCellValue('W' . $row, $data['nis']);
            $sheet->setCellValue('X' . $row, $data['nis']);
            $sheet->getRowDimension($row)->setRowHeight(20); 
            $row++; 
        }

        // Set orientasi kertas jadi LANDSCAPE
        $sheet->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $sheet->setTitle('Laporan Data RFQ');
        // Proses file excel

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data RFQ.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');

        // Save the spreadsheet
        $writer = new Xlsx($spreadsheet);
        $writer->save('output.xlsx');
    }
}

/* End of file Rfq_request.php */
/* Location: ./application/modules/rfq_request/controllers/backend/Rfq_request.php */
