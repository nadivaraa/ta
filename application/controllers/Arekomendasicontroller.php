<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Arekomendasicontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function arekomendasi()
	{
		$data['ranking'] = $this->vGetRanking();
		$this->load->view('arekomendasi', $data);
	}
	
    public function hitunglayak(){
        $ranking = $this->vGetRanking();

        if($_POST['jmlLayak'] > count($ranking)){
            $this->session->set_flashdata('err_msg', 'Set jumlah layak melebihi jumlah data ranking!');
            redirect("admin/arekomendasi");
        }

        $this->db->update('penilaian_ready', ['PERHITUNGAN_STATUS' => '0']);
        $no = 1;
        foreach ($ranking as $item) {
            if($no > $_POST['jmlLayak']) break;
            $this->db->where('EMAIL_NAS', $item->EMAIL_NAS)->update('penilaian_ready', ['PERHITUNGAN_STATUS' => '1']);
            $no++;
        }

        $this->session->set_flashdata('succ_msg', 'Berhasil atur jumlah layak!');
        redirect("admin/arekomendasi");
    }
    public function vGetRanking(){
		return $this->db->query("
			select 
				n.NAMA_NAS ,
				pr.*
			from 
				nasabah n ,
				penilaian_ready pr
			where 
				pr.PERHITUNGAN_V IS NOT NULL 
				AND n.EMAIL_NAS = pr.EMAIL_NAS 
			order by pr.PERHITUNGAN_V DESC
		")->result();
	}
	public function reportExcel(){
        $rankings = $this->vGetRanking();
		// === STYLING SHEETS ===
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $styleHeading1['font']['bold'] = true;
        $styleHeading1['font']['size'] = 20;
        
        $styleHeading2['font']['bold'] = true;
        $styleHeading2['font']['size'] = 14;
        
        $styleHeading3['font']['bold'] = true;
        $styleHeading3['font']['size'] = 12;
        
        $styleTitle['font']['bold']                         = true;
        $styleTitle['font']['size']                         = 11;
        $styleTitle['font']['color']['argb']                = \PhpOffice\PhpSpreadsheet\Style\Color::COLOR_WHITE;
        $styleTitle['fill']['fillType']                     = \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID;
        $styleTitle['fill']['color']['argb']                = '002060';
        $styleTitle['alignment']['horizontal']              = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
        $styleTitle['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        
        $styleContent['font']['size']                         = 11;
        $styleContent['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        
        $styleContentCenter['font']['size']                         = 12;
        $styleContentCenter['font']['bold']                         = true;
        $styleContentCenter['borders']['outline']['borderStyle']    = \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN;
        $styleContentCenter['alignment']['horizontal']              = \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER;
        $styleContentCenter['alignment']['vertical']                = \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER;

        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(30);
        $sheet->getColumnDimension('C')->setWidth(30);
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->getColumnDimension('E')->setWidth(30);

        $sheet->getRowDimension('1')->setRowHeight(40);
        $sheet->getRowDimension('3')->setRowHeight(30);

        $sheet->setCellValue('A1', 'HASIL PENILAIAN KREDIT PEMILIKAN RUMAH')->getStyle('A1')->applyFromArray($styleHeading1);

        // === WRITE DATA ===
        // Account Recevables
        $sheet->setCellValue('A3', 'NO')->getStyle('A3')->applyFromArray($styleContentCenter);
        $sheet->setCellValue('B3', 'NAMA')->getStyle('B3')->applyFromArray($styleContentCenter);
        $sheet->setCellValue('C3', 'EMAIL')->getStyle('C3')->applyFromArray($styleContentCenter);
        $sheet->setCellValue('D3', 'NILAI')->getStyle('D3')->applyFromArray($styleContentCenter);
        $sheet->setCellValue('E3', 'STATUS')->getStyle('E3')->applyFromArray($styleContentCenter);

        $no     = 1;
        $row    = 4;
        foreach ($rankings as $ranking) {
            $sheet->setCellValue('A'.$row, $no++)->getStyle('A'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('B'.$row, $ranking->NAMA_NAS)->getStyle('B'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('C'.$row, $ranking->EMAIL_NAS)->getStyle('C'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('D'.$row, $ranking->PERHITUNGAN_V)->getStyle('D'.$row)->applyFromArray($styleContentCenter);
            $sheet->setCellValue('E'.$row, "-")->getStyle('E'.$row++)->applyFromArray($styleContentCenter);
        }

		$fileName = 'LAPORAN_KPR_'.date('j F Y');
        $writer = new Xlsx($spreadsheet);
        
        header('Content-Type: application/vnd.ms-excel'); // generate excel file
        header('Content-Disposition: attachment;filename="'. $fileName .'.xlsx"'); 
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
	}
}
