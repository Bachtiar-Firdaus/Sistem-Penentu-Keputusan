<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ps_uptd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
/*		if($this->session->userdata('akses') != "ADMIN"){
			$url=base_url();
			redirect($url);
		}*/

		$this->load->model('m_kriteria');
	}
	public function index()
	{
		$data['contents'] = 'V_ps_uptd/content/dashboard';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_kriteria()
	{
		$data['contents'] = 'V_ps_uptd/content/v_kriteriatemp';
		$this->load->view('V_ps_uptd/index',$data);
        $data['getkriteria'] = $this->m_kriteria->getkriteria(); 
        $data['getkriteria_normalisasi'] = $this->m_kriteria->getkriteria_normalisasi(); 
		$this->load->view('V_ps_uptd/content/v_kriteria',$data);

	}

	public function proses_kriteria()
	{
				$Usia_Usia_bk = $this->input->post('Usia_Usia_bk');
				$Tanggungan_Usia_k = $this->input->post('Tanggungan_Usia_k');
				$Pendidikan_Usia_k = $this->input->post('Pendidikan_Usia_k');
				$Pekerjaan_Usia_k = $this->input->post('Pekerjaan_Usia_k');
				$Penghasilan_Usia_k = $this->input->post('Penghasilan_Usia_k');
				$Kesehatan_Usia_k = $this->input->post('Kesehatan_Usia_k');
				$Kondisi_Usia_k = $this->input->post('Kondisi_Usia_k');
				$Kendaraan_Usia_k = $this->input->post('Kendaraan_Usia_k');
				$Status_Usia_k = $this->input->post('Status_Usia_k');
				

				$Usia_Usia_1 = $Usia_Usia_bk / $Usia_Usia_bk;
				$Tanggungan_Usia_1 = $Usia_Usia_bk / $Tanggungan_Usia_k;
				$Pendidikan_Usia_1 = $Usia_Usia_bk / $Pendidikan_Usia_k;
				$Pekerjaan_Usia_1 = $Usia_Usia_bk / $Pekerjaan_Usia_k;
				$Penghasilan_Usia_1 = $Usia_Usia_bk / $Penghasilan_Usia_k;
				$Kesehatan_Usia_1 = $Usia_Usia_bk / $Kesehatan_Usia_k;
				$Kondisi_Usia_1 = $Usia_Usia_bk / $Kondisi_Usia_k;
				$Kendaraan_Usia_1 = $Usia_Usia_bk / $Kendaraan_Usia_k;
				$Status_Usia_1 = $Usia_Usia_bk / $Status_Usia_k;

				$Usia_Tanggungan_2 = $Tanggungan_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Tanggungan_2 = $Tanggungan_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Tanggungan_2 = $Tanggungan_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Tanggungan_2 = $Tanggungan_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Tanggungan_2 = $Tanggungan_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Tanggungan_2 = $Tanggungan_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Tanggungan_2 = $Tanggungan_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Tanggungan_2 = $Tanggungan_Usia_k / $Kendaraan_Usia_k;
				$Status_Tanggungan_2 = $Tanggungan_Usia_k / $Status_Usia_k;

				$Usia_Pendidikan_3 = $Pendidikan_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Pendidikan_3 = $Pendidikan_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Pendidikan_3 = $Pendidikan_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Pendidikan_3 = $Pendidikan_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Pendidikan_3 = $Pendidikan_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Pendidikan_3 = $Pendidikan_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Pendidikan_3 = $Pendidikan_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Pendidikan_3 = $Pendidikan_Usia_k / $Kendaraan_Usia_k;
				$Status_Pendidikan_3 = $Pendidikan_Usia_k / $Status_Usia_k;

				$Usia_Pekerjaan_4 = $Pekerjaan_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Pekerjaan_4 = $Pekerjaan_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Pekerjaan_4 = $Pekerjaan_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Pekerjaan_4 = $Pekerjaan_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Pekerjaan_4 = $Pekerjaan_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Pekerjaan_4 = $Pekerjaan_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Pekerjaan_4 = $Pekerjaan_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Pekerjaan_4 = $Pekerjaan_Usia_k / $Kendaraan_Usia_k;
				$Status_Pekerjaan_4 = $Pekerjaan_Usia_k / $Status_Usia_k;

				$Usia_Penghasilan_5 = $Penghasilan_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Penghasilan_5 = $Penghasilan_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Penghasilan_5 = $Penghasilan_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Penghasilan_5 = $Penghasilan_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Penghasilan_5 = $Penghasilan_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Penghasilan_5 = $Penghasilan_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Penghasilan_5 = $Penghasilan_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Penghasilan_5 = $Penghasilan_Usia_k / $Kendaraan_Usia_k;
				$Status_Penghasilan_5 = $Penghasilan_Usia_k / $Status_Usia_k;

				$Usia_Kesehatan_6 = $Kesehatan_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Kesehatan_6 = $Kesehatan_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Kesehatan_6 = $Kesehatan_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Kesehatan_6 = $Kesehatan_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Kesehatan_6 = $Kesehatan_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Kesehatan_6 = $Kesehatan_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Kesehatan_6 = $Kesehatan_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Kesehatan_6 = $Kesehatan_Usia_k / $Kendaraan_Usia_k;
				$Status_Kesehatan_6 = $Kesehatan_Usia_k / $Status_Usia_k;

				$Usia_Kondisi_7 = $Kondisi_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Kondisi_7 = $Kondisi_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Kondisi_7 = $Kondisi_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Kondisi_7 = $Kondisi_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Kondisi_7 = $Kondisi_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Kondisi_7 = $Kondisi_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Kondisi_7 = $Kondisi_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Kondisi_7 = $Kondisi_Usia_k / $Kendaraan_Usia_k;
				$Status_Kondisi_7 = $Kondisi_Usia_k / $Status_Usia_k;

				$Usia_Kendaraan_8 = $Kendaraan_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Kendaraan_8 = $Kendaraan_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Kendaraan_8 = $Kendaraan_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Kendaraan_8 = $Kendaraan_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Kendaraan_8 = $Kendaraan_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Kendaraan_8 = $Kendaraan_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Kendaraan_8 = $Kendaraan_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Kendaraan_8 = $Kendaraan_Usia_k / $Kendaraan_Usia_k;
				$Status_Kendaraan_8 = $Kendaraan_Usia_k / $Status_Usia_k;

				$Usia_Status_9 = $Status_Usia_k / $Usia_Usia_bk;
				$Tanggungan_Status_9 = $Status_Usia_k / $Tanggungan_Usia_k;
				$Pendidikan_Status_9 = $Status_Usia_k / $Pendidikan_Usia_k;
				$Pekerjaan_Status_9 = $Status_Usia_k / $Pekerjaan_Usia_k;
				$Penghasilan_Status_9 = $Status_Usia_k / $Penghasilan_Usia_k;
				$Kesehatan_Status_9 = $Status_Usia_k / $Kesehatan_Usia_k;
				$Kondisi_Status_9 = $Status_Usia_k / $Kondisi_Usia_k;
				$Kendaraan_Status_9 = $Status_Usia_k / $Kendaraan_Usia_k;
				$Status_Status_9 = $Status_Usia_k / $Status_Usia_k;



				$Usia_Rata_10 =$Usia_Usia_1 + $Usia_Tanggungan_2 + $Usia_Pendidikan_3 + $Usia_Pekerjaan_4 + $Usia_Penghasilan_5 + $Usia_Kesehatan_6 + $Usia_Kondisi_7 + $Usia_Kendaraan_8 + $Usia_Status_9;
				$Tanggungan_Rata_10 =$Tanggungan_Usia_1 + $Tanggungan_Tanggungan_2 + $Tanggungan_Pendidikan_3 + $Tanggungan_Pekerjaan_4 + $Tanggungan_Penghasilan_5 + $Tanggungan_Kesehatan_6 + $Tanggungan_Kondisi_7 + $Tanggungan_Kendaraan_8 + $Tanggungan_Status_9;
				$Pendidikan_Rata_10 =$Pendidikan_Usia_1 + $Pendidikan_Tanggungan_2 + $Pendidikan_Pendidikan_3 + $Pendidikan_Pekerjaan_4 + $Pendidikan_Penghasilan_5 + $Pendidikan_Kesehatan_6 + $Pendidikan_Kondisi_7 + $Pendidikan_Kendaraan_8 + $Pendidikan_Status_9; 
				$Pekerjaan_Rata_10 =$Pekerjaan_Usia_1 + $Pekerjaan_Tanggungan_2 + $Pekerjaan_Pendidikan_3 + $Pekerjaan_Pekerjaan_4 + $Pekerjaan_Penghasilan_5 + $Pekerjaan_Kesehatan_6 + $Pekerjaan_Kondisi_7 + $Pekerjaan_Kendaraan_8 + $Pekerjaan_Status_9;
				$Penghasilan_Rata_10 =$Penghasilan_Usia_1 + $Penghasilan_Tanggungan_2 + $Penghasilan_Pendidikan_3 + $Penghasilan_Pekerjaan_4 + $Penghasilan_Penghasilan_5 + $Penghasilan_Kesehatan_6 + $Penghasilan_Kondisi_7 + $Penghasilan_Kendaraan_8 + $Penghasilan_Status_9; 
				$Kesehatan_Rata_10 =$Kesehatan_Usia_1 + $Kesehatan_Tanggungan_2 + $Kesehatan_Pendidikan_3 + $Kesehatan_Pekerjaan_4 + $Kesehatan_Penghasilan_5 + $Kesehatan_Kesehatan_6 + $Kesehatan_Kondisi_7 + $Kesehatan_Kendaraan_8 + $Kesehatan_Status_9;
				$Kondisi_Rata_10 =$Kondisi_Usia_1 + $Kondisi_Tanggungan_2 + $Kondisi_Pendidikan_3 + $Kondisi_Pekerjaan_4 + $Kondisi_Penghasilan_5 + $Kondisi_Kesehatan_6 + $Kondisi_Kondisi_7 + $Kondisi_Kendaraan_8 + $Kondisi_Status_9;
				$Kendaraan_Rata_10 =$Kendaraan_Usia_1 + $Kendaraan_Tanggungan_2 + $Kendaraan_Pendidikan_3 + $Kendaraan_Pekerjaan_4 + $Kendaraan_Penghasilan_5 + $Kendaraan_Kesehatan_6 + $Kendaraan_Kondisi_7 + $Kendaraan_Kendaraan_8 + $Kendaraan_Status_9;
				$Status_Rata_10 =$Status_Usia_1 + $Status_Tanggungan_2 + $Status_Pendidikan_3 + $Status_Pekerjaan_4 + $Status_Penghasilan_5 + $Status_Kesehatan_6 + $Status_Kondisi_7 + $Status_Kendaraan_8 + $Status_Status_9;


				$data = array(
					'Usia_Usia_1' => $Usia_Usia_1, 
					'Tanggungan_Usia_1' => $Tanggungan_Usia_1,
					'Pendidikan_Usia_1' => $Pendidikan_Usia_1,
					'Pekerjaan_Usia_1' => $Pekerjaan_Usia_1,
					'Penghasilan_Usia_1' => $Penghasilan_Usia_1,
					'Kesehatan_Usia_1' => $Kesehatan_Usia_1,
					'Kondisi_Usia_1' => $Kondisi_Usia_1,
					'Kendaraan_Usia_1' => $Kendaraan_Usia_1,
					'Status_Usia_1' => $Status_Usia_1,

					'Usia_Tanggungan_2' => $Usia_Tanggungan_2,
					'Tanggungan_Tanggungan_2' => $Tanggungan_Tanggungan_2,
					'Pendidikan_Tanggungan_2' => $Pendidikan_Tanggungan_2,
					'Pekerjaan_Tanggungan_2' => $Pekerjaan_Tanggungan_2,
					'Penghasilan_Tanggungan_2' => $Penghasilan_Tanggungan_2,
					'Kesehatan_Tanggungan_2' => $Kesehatan_Tanggungan_2,
					'Kondisi_Tanggungan_2' => $Kondisi_Tanggungan_2,
					'Kendaraan_Tanggungan_2' => $Kendaraan_Tanggungan_2,
					'Status_Tanggungan_2' => $Status_Tanggungan_2,

					'Usia_Pendidikan_3' => $Usia_Pendidikan_3,
					'Tanggungan_Pendidikan_3' => $Tanggungan_Pendidikan_3,
					'Pendidikan_Pendidikan_3' => $Pendidikan_Pendidikan_3,
					'Pekerjaan_Pendidikan_3' => $Pekerjaan_Pendidikan_3,
					'Penghasilan_Pendidikan_3' => $Penghasilan_Pendidikan_3,
					'Kesehatan_Pendidikan_3' => $Kesehatan_Pendidikan_3,
					'Kondisi_Pendidikan_3' => $Kondisi_Pendidikan_3,
					'Kendaraan_Pendidikan_3' => $Kendaraan_Pendidikan_3,
					'Status_Pendidikan_3' => $Status_Pendidikan_3,

					'Usia_Pekerjaan_4' => $Usia_Pekerjaan_4,
					'Tanggungan_Pekerjaan_4' => $Tanggungan_Pekerjaan_4,
					'Pendidikan_Pekerjaan_4' => $Pendidikan_Pekerjaan_4,
					'Pekerjaan_Pekerjaan_4' => $Pekerjaan_Pekerjaan_4,
					'Penghasilan_Pekerjaan_4' => $Penghasilan_Pekerjaan_4,
					'Kesehatan_Pekerjaan_4' => $Kesehatan_Pekerjaan_4,
					'Kondisi_Pekerjaan_4' => $Kondisi_Pekerjaan_4,
					'Kendaraan_Pekerjaan_4' => $Kendaraan_Pekerjaan_4,
					'Status_Pekerjaan_4' => $Status_Pekerjaan_4,

					'Usia_Penghasilan_5' => $Usia_Penghasilan_5,
					'Tanggungan_Penghasilan_5' => $Tanggungan_Penghasilan_5,
					'Pendidikan_Penghasilan_5' => $Pendidikan_Penghasilan_5,
					'Pekerjaan_Penghasilan_5' => $Pekerjaan_Penghasilan_5,
					'Penghasilan_Penghasilan_5' => $Penghasilan_Penghasilan_5,
					'Kesehatan_Penghasilan_5' => $Kesehatan_Penghasilan_5,
					'Kondisi_Penghasilan_5' => $Kondisi_Penghasilan_5,
					'Kendaraan_Penghasilan_5' => $Kendaraan_Penghasilan_5,
					'Status_Penghasilan_5' => $Status_Penghasilan_5,

					'Usia_Kesehatan_6' => $Usia_Kesehatan_6,
					'Tanggungan_Kesehatan_6' => $Tanggungan_Kesehatan_6,
					'Pendidikan_Kesehatan_6' => $Pendidikan_Kesehatan_6,
					'Pekerjaan_Kesehatan_6' => $Pekerjaan_Kesehatan_6,
					'Penghasilan_Kesehatan_6' => $Penghasilan_Kesehatan_6,
					'Kesehatan_Kesehatan_6' => $Kesehatan_Kesehatan_6,
					'Kondisi_Kesehatan_6' => $Kondisi_Kesehatan_6,
					'Kendaraan_Kesehatan_6' => $Kendaraan_Kesehatan_6,
					'Status_Kesehatan_6' => $Status_Kesehatan_6,

					'Usia_Kondisi_7' => $Usia_Kondisi_7,
					'Tanggungan_Kondisi_7' => $Tanggungan_Kondisi_7,
					'Pendidikan_Kondisi_7' => $Pendidikan_Kondisi_7,
					'Pekerjaan_Kondisi_7' => $Pekerjaan_Kondisi_7,
					'Penghasilan_Kondisi_7' => $Penghasilan_Kondisi_7,
					'Kesehatan_Kondisi_7' => $Kesehatan_Kondisi_7,
					'Kondisi_Kondisi_7' => $Kondisi_Kondisi_7,
					'Kendaraan_Kondisi_7' => $Kendaraan_Kondisi_7,
					'Status_Kondisi_7' => $Status_Kondisi_7,

					'Usia_Kendaraan_8' => $Usia_Kendaraan_8,
					'Tanggungan_Kendaraan_8' => $Tanggungan_Kendaraan_8,
					'Pendidikan_Kendaraan_8' => $Pendidikan_Kendaraan_8,
					'Pekerjaan_Kendaraan_8' => $Pekerjaan_Kendaraan_8,
					'Penghasilan_Kendaraan_8' => $Penghasilan_Kendaraan_8,
					'Kesehatan_Kendaraan_8' => $Kesehatan_Kendaraan_8,
					'Kondisi_Kendaraan_8' => $Kondisi_Kendaraan_8,
					'Kendaraan_Kendaraan_8' => $Kendaraan_Kendaraan_8,
					'Status_Kendaraan_8' => $Status_Kendaraan_8,

					'Usia_Status_9' => $Usia_Status_9,
					'Tanggungan_Status_9' => $Tanggungan_Status_9,
					'Pendidikan_Status_9' => $Pendidikan_Status_9,
					'Pekerjaan_Status_9' => $Pekerjaan_Status_9,
					'Penghasilan_Status_9' => $Penghasilan_Status_9,
					'Kesehatan_Status_9' => $Kesehatan_Status_9,
					'Kondisi_Status_9' => $Kondisi_Status_9,
					'Kendaraan_Status_9' => $Kendaraan_Status_9,
					'Status_Status_9' => $Status_Status_9,

					'Usia_Rata_10' => $Usia_Rata_10,
					'Tanggungan_Rata_10' => $Tanggungan_Rata_10,
					'Pendidikan_Rata_10' => $Pendidikan_Rata_10,
					'Pekerjaan_Rata_10' => $Pekerjaan_Rata_10,
					'Penghasilan_Rata_10' => $Penghasilan_Rata_10,
					'Kesehatan_Rata_10' => $Kesehatan_Rata_10,
					'Kondisi_Rata_10' => $Kondisi_Rata_10,
					'Kendaraan_Rata_10' => $Kendaraan_Rata_10,
					'Status_Rata_10' => $Status_Rata_10,
					);



					$Usia_Usia_1s = $Usia_Usia_1 / $Usia_Rata_10;
					$Tanggungan_Usia_1s = $Tanggungan_Usia_1 / $Tanggungan_Rata_10;
					$Pendidikan_Usia_1s = $Pendidikan_Usia_1 / $Pendidikan_Rata_10;
					$Pekerjaan_Usia_1s = $Pekerjaan_Usia_1 / $Pekerjaan_Rata_10;
					$Penghasilan_Usia_1s = $Penghasilan_Usia_1 / $Penghasilan_Rata_10; 
					$Kesehatan_Usia_1s = $Kesehatan_Usia_1 / $Kesehatan_Rata_10;
					$Kondisi_Usia_1s = $Kondisi_Usia_1 / $Kondisi_Rata_10;
					$Kendaraan_Usia_1s = $Kendaraan_Usia_1 / $Kendaraan_Rata_10;
					$Status_Usia_1s = $Status_Usia_1 / $Status_Rata_10;
					$Rata_Usia_1s = ($Usia_Usia_1s + $Tanggungan_Usia_1s + $Pendidikan_Usia_1s + $Pekerjaan_Usia_1s + $Penghasilan_Usia_1s + $Kesehatan_Usia_1s + $Kondisi_Usia_1s + $Kendaraan_Usia_1s + $Status_Usia_1s) / "9";

					$Usia_Tanggungan_2s = $Usia_Tanggungan_2 / $Usia_Rata_10;
					$Tanggungan_Tanggungan_2s = $Tanggungan_Tanggungan_2 / $Tanggungan_Rata_10;
					$Pendidikan_Tanggungan_2s = $Pendidikan_Tanggungan_2 / $Pendidikan_Rata_10; 
					$Pekerjaan_Tanggungan_2s = $Pekerjaan_Tanggungan_2 / $Pekerjaan_Rata_10;
					$Penghasilan_Tanggungan_2s = $Penghasilan_Tanggungan_2 / $Penghasilan_Rata_10; 
					$Kesehatan_Tanggungan_2s = $Kesehatan_Tanggungan_2 / $Kesehatan_Rata_10;
					$Kondisi_Tanggungan_2s = $Kondisi_Tanggungan_2 / $Kondisi_Rata_10;
					$Kendaraan_Tanggungan_2s = $Kendaraan_Tanggungan_2 / $Kendaraan_Rata_10;
					$Status_Tanggungan_2s = $Status_Tanggungan_2 / $Status_Rata_10;
					$Rata_Tanggungan_2s = ($Usia_Tanggungan_2s + $Tanggungan_Tanggungan_2s + $Pendidikan_Tanggungan_2s + $Pekerjaan_Tanggungan_2s + $Penghasilan_Tanggungan_2s + $Kesehatan_Tanggungan_2s + $Kondisi_Tanggungan_2s + $Kendaraan_Tanggungan_2s + $Status_Tanggungan_2s) / "9";

					$Usia_Pendidikan_3s = $Usia_Pendidikan_3 / $Usia_Rata_10;
					$Tanggungan_Pendidikan_3s = $Tanggungan_Pendidikan_3 / $Tanggungan_Rata_10;
					$Pendidikan_Pendidikan_3s = $Pendidikan_Pendidikan_3 / $Pendidikan_Rata_10; 
					$Pekerjaan_Pendidikan_3s = $Pekerjaan_Pendidikan_3 / $Pekerjaan_Rata_10;
					$Penghasilan_Pendidikan_3s = $Penghasilan_Pendidikan_3 / $Penghasilan_Rata_10; 
					$Kesehatan_Pendidikan_3s = $Kesehatan_Pendidikan_3 / $Kesehatan_Rata_10;
					$Kondisi_Pendidikan_3s = $Kondisi_Pendidikan_3 / $Kondisi_Rata_10;
					$Kendaraan_Pendidikan_3s = $Kendaraan_Pendidikan_3 / $Kendaraan_Rata_10;
					$Status_Pendidikan_3s = $Status_Pendidikan_3 / $Status_Rata_10;
					$Rata_Pendidikan_3s = ($Usia_Pendidikan_3s + $Tanggungan_Pendidikan_3s + $Pendidikan_Pendidikan_3s + $Pekerjaan_Pendidikan_3s + $Penghasilan_Pendidikan_3s + $Kesehatan_Pendidikan_3s + $Kondisi_Pendidikan_3s + $Kendaraan_Pendidikan_3s + $Status_Pendidikan_3s) / "9";

					$Usia_Pekerjaan_4s = $Usia_Pekerjaan_4 / $Usia_Rata_10;
					$Tanggungan_Pekerjaan_4s = $Tanggungan_Pekerjaan_4 / $Tanggungan_Rata_10;
					$Pendidikan_Pekerjaan_4s = $Pendidikan_Pekerjaan_4 / $Pendidikan_Rata_10; 
					$Pekerjaan_Pekerjaan_4s = $Pekerjaan_Pekerjaan_4 / $Pekerjaan_Rata_10;
					$Penghasilan_Pekerjaan_4s = $Penghasilan_Pekerjaan_4 / $Penghasilan_Rata_10; 
					$Kesehatan_Pekerjaan_4s = $Kesehatan_Pekerjaan_4 / $Kesehatan_Rata_10;
					$Kondisi_Pekerjaan_4s = $Kondisi_Pekerjaan_4 / $Kondisi_Rata_10;
					$Kendaraan_Pekerjaan_4s = $Kendaraan_Pekerjaan_4 / $Kendaraan_Rata_10;
					$Status_Pekerjaan_4s = $Status_Pekerjaan_4 / $Status_Rata_10;
					$Rata_Pekerjaan_4s = ($Usia_Pekerjaan_4s + $Tanggungan_Pekerjaan_4s + $Pendidikan_Pekerjaan_4s + $Pekerjaan_Pekerjaan_4s + $Penghasilan_Pekerjaan_4s + $Kesehatan_Pekerjaan_4s + $Kondisi_Pekerjaan_4s + $Kendaraan_Pekerjaan_4s + $Status_Pekerjaan_4s) / "9";

					$Usia_Penghasilan_5s = $Usia_Penghasilan_5 / $Usia_Rata_10;
					$Tanggungan_Penghasilan_5s = $Tanggungan_Penghasilan_5 / $Tanggungan_Rata_10;
					$Pendidikan_Penghasilan_5s = $Pendidikan_Penghasilan_5 / $Pendidikan_Rata_10; 
					$Pekerjaan_Penghasilan_5s = $Pekerjaan_Penghasilan_5 / $Pekerjaan_Rata_10;
					$Penghasilan_Penghasilan_5s = $Penghasilan_Penghasilan_5 / $Penghasilan_Rata_10; 
					$Kesehatan_Penghasilan_5s = $Kesehatan_Penghasilan_5 / $Kesehatan_Rata_10;
					$Kondisi_Penghasilan_5s = $Kondisi_Penghasilan_5 / $Kondisi_Rata_10;
					$Kendaraan_Penghasilan_5s = $Kendaraan_Penghasilan_5 / $Kendaraan_Rata_10;
					$Status_Penghasilan_5s = $Status_Penghasilan_5 / $Status_Rata_10;
					$Rata_Penghasilan_5s = ($Usia_Penghasilan_5s + $Tanggungan_Penghasilan_5s + $Pendidikan_Penghasilan_5s + $Pekerjaan_Penghasilan_5s + $Penghasilan_Penghasilan_5s + $Kesehatan_Penghasilan_5s + $Kondisi_Penghasilan_5s + $Kendaraan_Penghasilan_5s + $Status_Penghasilan_5s) / "9";

					$Usia_Kesehatan_6s = $Usia_Kesehatan_6 / $Usia_Rata_10;
					$Tanggungan_Kesehatan_6s = $Tanggungan_Kesehatan_6 / $Tanggungan_Rata_10;
					$Pendidikan_Kesehatan_6s = $Pendidikan_Kesehatan_6 / $Pendidikan_Rata_10; 
					$Pekerjaan_Kesehatan_6s = $Pekerjaan_Kesehatan_6 / $Pekerjaan_Rata_10;
					$Penghasilan_Kesehatan_6s = $Penghasilan_Kesehatan_6 / $Penghasilan_Rata_10; 
					$Kesehatan_Kesehatan_6s = $Kesehatan_Kesehatan_6 / $Kesehatan_Rata_10;
					$Kondisi_Kesehatan_6s = $Kondisi_Kesehatan_6 / $Kondisi_Rata_10;
					$Kendaraan_Kesehatan_6s = $Kendaraan_Kesehatan_6 / $Kendaraan_Rata_10;
					$Status_Kesehatan_6s = $Status_Kesehatan_6 / $Status_Rata_10;
					$Rata_Kesehatan_6s = ($Usia_Kesehatan_6s + $Tanggungan_Kesehatan_6s + $Pendidikan_Kesehatan_6s + $Pekerjaan_Kesehatan_6s + $Penghasilan_Kesehatan_6s + $Kesehatan_Kesehatan_6s + $Kondisi_Kesehatan_6s + $Kendaraan_Kesehatan_6s + $Status_Kesehatan_6s) / "9";

					$Usia_Kondisi_7s = $Usia_Kondisi_7 / $Usia_Rata_10;
					$Tanggungan_Kondisi_7s = $Tanggungan_Kondisi_7 / $Tanggungan_Rata_10;
					$Pendidikan_Kondisi_7s = $Pendidikan_Kondisi_7 / $Pendidikan_Rata_10; 
					$Pekerjaan_Kondisi_7s = $Pekerjaan_Kondisi_7 / $Pekerjaan_Rata_10;
					$Penghasilan_Kondisi_7s = $Penghasilan_Kondisi_7 / $Penghasilan_Rata_10; 
					$Kesehatan_Kondisi_7s = $Kesehatan_Kondisi_7 / $Kesehatan_Rata_10;
					$Kondisi_Kondisi_7s = $Kondisi_Kondisi_7 / $Kondisi_Rata_10;
					$Kendaraan_Kondisi_7s = $Kendaraan_Kondisi_7 / $Kendaraan_Rata_10;
					$Status_Kondisi_7s = $Status_Kondisi_7 / $Status_Rata_10;
					$Rata_Kondisi_7s = ($Usia_Kondisi_7s + $Tanggungan_Kondisi_7s + $Pendidikan_Kondisi_7s + $Pekerjaan_Kondisi_7s + $Penghasilan_Kondisi_7s + $Kesehatan_Kondisi_7s + $Kondisi_Kondisi_7s + $Kendaraan_Kondisi_7s + $Status_Kondisi_7s) / "9";

					$Usia_Kendaraan_8s = $Usia_Kendaraan_8 / $Usia_Rata_10;
					$Tanggungan_Kendaraan_8s = $Tanggungan_Kendaraan_8 / $Tanggungan_Rata_10;
					$Pendidikan_Kendaraan_8s = $Pendidikan_Kendaraan_8 / $Pendidikan_Rata_10; 
					$Pekerjaan_Kendaraan_8s = $Pekerjaan_Kendaraan_8 / $Pekerjaan_Rata_10;
					$Penghasilan_Kendaraan_8s = $Penghasilan_Kendaraan_8 / $Penghasilan_Rata_10; 
					$Kesehatan_Kendaraan_8s = $Kesehatan_Kendaraan_8 / $Kesehatan_Rata_10;
					$Kondisi_Kendaraan_8s = $Kondisi_Kendaraan_8 / $Kondisi_Rata_10;
					$Kendaraan_Kendaraan_8s = $Kendaraan_Kendaraan_8 / $Kendaraan_Rata_10;
					$Status_Kendaraan_8s = $Status_Kendaraan_8 / $Status_Rata_10;
					$Rata_Kendaraan_8s = ($Usia_Kendaraan_8s + $Tanggungan_Kendaraan_8s + $Pendidikan_Kendaraan_8s + $Pekerjaan_Kendaraan_8s + $Penghasilan_Kendaraan_8s + $Kesehatan_Kendaraan_8s + $Kondisi_Kendaraan_8s + $Kendaraan_Kendaraan_8s + $Status_Kendaraan_8s) / "9";

					$Usia_Status_9s = $Usia_Status_9 / $Usia_Rata_10;
					$Tanggungan_Status_9s = $Tanggungan_Status_9 / $Tanggungan_Rata_10;
					$Pendidikan_Status_9s = $Pendidikan_Status_9 / $Pendidikan_Rata_10; 
					$Pekerjaan_Status_9s = $Pekerjaan_Status_9 / $Pekerjaan_Rata_10;
					$Penghasilan_Status_9s = $Penghasilan_Status_9 / $Penghasilan_Rata_10; 
					$Kesehatan_Status_9s = $Kesehatan_Status_9 / $Kesehatan_Rata_10;
					$Kondisi_Status_9s = $Kondisi_Status_9 / $Kondisi_Rata_10;
					$Kendaraan_Status_9s = $Kendaraan_Status_9 / $Kendaraan_Rata_10;
					$Status_Status_9s = $Status_Status_9 / $Status_Rata_10;
					$Rata_Status_9s = ($Usia_Status_9s + $Tanggungan_Status_9s + $Pendidikan_Status_9s + $Pekerjaan_Status_9s + $Penghasilan_Status_9s + $Kesehatan_Status_9s + $Kondisi_Status_9s + $Kendaraan_Status_9s + $Status_Status_9s) / "9";


					$Usia_Rata_10s = $Usia_Usia_1s + $Usia_Tanggungan_2s + $Usia_Pendidikan_3s + $Usia_Pekerjaan_4s + $Usia_Penghasilan_5s + $Usia_Kesehatan_6s + $Usia_Kondisi_7s + $Usia_Kendaraan_8s + $Usia_Status_9s;

					$Tanggungan_Rata_10s = $Tanggungan_Usia_1s + $Tanggungan_Tanggungan_2s + $Tanggungan_Pendidikan_3s + $Tanggungan_Pekerjaan_4s + $Tanggungan_Penghasilan_5s + $Tanggungan_Kesehatan_6s + $Tanggungan_Kondisi_7s + $Tanggungan_Kendaraan_8s + $Tanggungan_Status_9s;

					$Pendidikan_Rata_10s = $Pendidikan_Usia_1s + $Pendidikan_Tanggungan_2s + $Pendidikan_Pendidikan_3s + $Pendidikan_Pekerjaan_4s + $Pendidikan_Penghasilan_5s + $Pendidikan_Kesehatan_6s + $Pendidikan_Kondisi_7s + $Pendidikan_Kendaraan_8s + $Pendidikan_Status_9s;

					$Pekerjaan_Rata_10s = $Pekerjaan_Usia_1s + $Pekerjaan_Tanggungan_2s + $Pekerjaan_Pendidikan_3s + $Pekerjaan_Pekerjaan_4s + $Pekerjaan_Penghasilan_5s + $Pekerjaan_Kesehatan_6s + $Pekerjaan_Kondisi_7s + $Pekerjaan_Kendaraan_8s + $Pekerjaan_Status_9s;

					$Penghasilan_Rata_10s = $Penghasilan_Usia_1s + $Penghasilan_Tanggungan_2s + $Penghasilan_Pendidikan_3s + $Penghasilan_Pekerjaan_4s + $Penghasilan_Penghasilan_5s + $Penghasilan_Kesehatan_6s + $Penghasilan_Kondisi_7s + $Penghasilan_Kendaraan_8s + $Penghasilan_Status_9s;

					$Kesehatan_Rata_10s = $Kesehatan_Usia_1s + $Kesehatan_Tanggungan_2s + $Kesehatan_Pendidikan_3s + $Kesehatan_Pekerjaan_4s + $Kesehatan_Penghasilan_5s + $Kesehatan_Kesehatan_6s + $Kesehatan_Kondisi_7s + $Kesehatan_Kendaraan_8s + $Kesehatan_Status_9s;

					$Kondisi_Rata_10s = $Kondisi_Usia_1s + $Kondisi_Tanggungan_2s + $Kondisi_Pendidikan_3s + $Kondisi_Pekerjaan_4s + $Kondisi_Penghasilan_5s + $Kondisi_Kesehatan_6s + $Kondisi_Kondisi_7s + $Kondisi_Kendaraan_8s + $Kondisi_Status_9s;

					$Kendaraan_Rata_10s = $Kendaraan_Usia_1s + $Kendaraan_Tanggungan_2s + $Kendaraan_Pendidikan_3s + $Kendaraan_Pekerjaan_4s + $Kendaraan_Penghasilan_5s + $Kendaraan_Kesehatan_6s + $Kendaraan_Kondisi_7s + $Kendaraan_Kendaraan_8s + $Kendaraan_Status_9s;

					$Status_Rata_10s = $Status_Usia_1s + $Status_Tanggungan_2s + $Status_Pendidikan_3s + $Status_Pekerjaan_4s + $Status_Penghasilan_5s + $Status_Kesehatan_6s + $Status_Kondisi_7s + $Status_Kendaraan_8s + $Status_Status_9s;

				$data1 = array(
					'Usia_Usia_1s' => $Usia_Usia_1s, 
					'Tanggungan_Usia_1s' => $Tanggungan_Usia_1s,
					'Pendidikan_Usia_1s' => $Pendidikan_Usia_1s,
					'Pekerjaan_Usia_1s' => $Pekerjaan_Usia_1s,
					'Penghasilan_Usia_1s' => $Penghasilan_Usia_1s,
					'Kesehatan_Usia_1s' => $Kesehatan_Usia_1s,
					'Kondisi_Usia_1s' => $Kondisi_Usia_1s,
					'Kendaraan_Usia_1s' => $Kendaraan_Usia_1s,
					'Status_Usia_1s' => $Status_Usia_1s,
					'Rata_Usia_1s' => $Rata_Usia_1s,

					'Usia_Tanggungan_2s' => $Usia_Tanggungan_2s,
					'Tanggungan_Tanggungan_2s' => $Tanggungan_Tanggungan_2s,
					'Pendidikan_Tanggungan_2s' => $Pendidikan_Tanggungan_2s,
					'Pekerjaan_Tanggungan_2s' => $Pekerjaan_Tanggungan_2s,
					'Penghasilan_Tanggungan_2s' => $Penghasilan_Tanggungan_2s,
					'Kesehatan_Tanggungan_2s' => $Kesehatan_Tanggungan_2s,
					'Kondisi_Tanggungan_2s' => $Kondisi_Tanggungan_2s,
					'Kendaraan_Tanggungan_2s' => $Kendaraan_Tanggungan_2s,
					'Status_Tanggungan_2s' => $Status_Tanggungan_2s,
					'Rata_Tanggungan_2s' => $Rata_Tanggungan_2s,

					'Usia_Pendidikan_3s' => $Usia_Pendidikan_3s,
					'Tanggungan_Pendidikan_3s' => $Tanggungan_Pendidikan_3s,
					'Pendidikan_Pendidikan_3s' => $Pendidikan_Pendidikan_3s,
					'Pekerjaan_Pendidikan_3s' => $Pekerjaan_Pendidikan_3s,
					'Penghasilan_Pendidikan_3s' => $Penghasilan_Pendidikan_3s,
					'Kesehatan_Pendidikan_3s' => $Kesehatan_Pendidikan_3s,
					'Kondisi_Pendidikan_3s' => $Kondisi_Pendidikan_3s,
					'Kendaraan_Pendidikan_3s' => $Kendaraan_Pendidikan_3s,
					'Status_Pendidikan_3s' => $Status_Pendidikan_3s,
					'Rata_Pendidikan_3s' => $Rata_Pendidikan_3s,

					'Usia_Pekerjaan_4s' => $Usia_Pekerjaan_4s,
					'Tanggungan_Pekerjaan_4s' => $Tanggungan_Pekerjaan_4s,
					'Pendidikan_Pekerjaan_4s' => $Pendidikan_Pekerjaan_4s,
					'Pekerjaan_Pekerjaan_4s' => $Pekerjaan_Pekerjaan_4s,
					'Penghasilan_Pekerjaan_4s' => $Penghasilan_Pekerjaan_4s,
					'Kesehatan_Pekerjaan_4s' => $Kesehatan_Pekerjaan_4s,
					'Kondisi_Pekerjaan_4s' => $Kondisi_Pekerjaan_4s,
					'Kendaraan_Pekerjaan_4s' => $Kendaraan_Pekerjaan_4s,
					'Status_Pekerjaan_4s' => $Status_Pekerjaan_4s,
					'Rata_Pekerjaan_4s' => $Rata_Pekerjaan_4s,

					'Usia_Penghasilan_5s' => $Usia_Penghasilan_5s,
					'Tanggungan_Penghasilan_5s' => $Tanggungan_Penghasilan_5s,
					'Pendidikan_Penghasilan_5s' => $Pendidikan_Penghasilan_5s,
					'Pekerjaan_Penghasilan_5s' => $Pekerjaan_Penghasilan_5s,
					'Penghasilan_Penghasilan_5s' => $Penghasilan_Penghasilan_5s,
					'Kesehatan_Penghasilan_5s' => $Kesehatan_Penghasilan_5s,
					'Kondisi_Penghasilan_5s' => $Kondisi_Penghasilan_5s,
					'Kendaraan_Penghasilan_5s' => $Kendaraan_Penghasilan_5s,
					'Status_Penghasilan_5s' => $Status_Penghasilan_5s,
					'Rata_Penghasilan_5s' => $Rata_Penghasilan_5s,

					'Usia_Kesehatan_6s' => $Usia_Kesehatan_6s,
					'Tanggungan_Kesehatan_6s' => $Tanggungan_Kesehatan_6s,
					'Pendidikan_Kesehatan_6s' => $Pendidikan_Kesehatan_6s,
					'Pekerjaan_Kesehatan_6s' => $Pekerjaan_Kesehatan_6s,
					'Penghasilan_Kesehatan_6s' => $Penghasilan_Kesehatan_6s,
					'Kesehatan_Kesehatan_6s' => $Kesehatan_Kesehatan_6s,
					'Kondisi_Kesehatan_6s' => $Kondisi_Kesehatan_6s,
					'Kendaraan_Kesehatan_6s' => $Kendaraan_Kesehatan_6s,
					'Status_Kesehatan_6s' => $Status_Kesehatan_6s,
					'Rata_Kesehatan_6s' => $Rata_Kesehatan_6s,

					'Usia_Kondisi_7s' => $Usia_Kondisi_7s,
					'Tanggungan_Kondisi_7s' => $Tanggungan_Kondisi_7s,
					'Pendidikan_Kondisi_7s' => $Pendidikan_Kondisi_7s,
					'Pekerjaan_Kondisi_7s' => $Pekerjaan_Kondisi_7s,
					'Penghasilan_Kondisi_7s' => $Penghasilan_Kondisi_7s,
					'Kesehatan_Kondisi_7s' => $Kesehatan_Kondisi_7s,
					'Kondisi_Kondisi_7s' => $Kondisi_Kondisi_7s,
					'Kendaraan_Kondisi_7s' => $Kendaraan_Kondisi_7s,
					'Status_Kondisi_7s' => $Status_Kondisi_7s,
					'Rata_Kondisi_7s' => $Rata_Kondisi_7s,

					'Usia_Kendaraan_8s' => $Usia_Kendaraan_8s,
					'Tanggungan_Kendaraan_8s' => $Tanggungan_Kendaraan_8s,
					'Pendidikan_Kendaraan_8s' => $Pendidikan_Kendaraan_8s,
					'Pekerjaan_Kendaraan_8s' => $Pekerjaan_Kendaraan_8s,
					'Penghasilan_Kendaraan_8s' => $Penghasilan_Kendaraan_8s,
					'Kesehatan_Kendaraan_8s' => $Kesehatan_Kendaraan_8s,
					'Kondisi_Kendaraan_8s' => $Kondisi_Kendaraan_8s,
					'Kendaraan_Kendaraan_8s' => $Kendaraan_Kendaraan_8s,
					'Status_Kendaraan_8s' => $Status_Kendaraan_8s,
					'Rata_Kendaraan_8s' => $Rata_Kendaraan_8s,

					'Usia_Status_9s' => $Usia_Status_9s,
					'Tanggungan_Status_9s' => $Tanggungan_Status_9s,
					'Pendidikan_Status_9s' => $Pendidikan_Status_9s,
					'Pekerjaan_Status_9s' => $Pekerjaan_Status_9s,
					'Penghasilan_Status_9s' => $Penghasilan_Status_9s,
					'Kesehatan_Status_9s' => $Kesehatan_Status_9s,
					'Kondisi_Status_9s' => $Kondisi_Status_9s,
					'Kendaraan_Status_9s' => $Kendaraan_Status_9s,
					'Status_Status_9s' => $Status_Status_9s,
					'Rata_Status_9s' => $Rata_Status_9s,

					'Usia_Rata_10s' => $Usia_Rata_10s,
					'Tanggungan_Rata_10s' => $Tanggungan_Rata_10s,
					'Pendidikan_Rata_10s' => $Pendidikan_Rata_10s,
					'Pekerjaan_Rata_10s' => $Pekerjaan_Rata_10s,
					'Penghasilan_Rata_10s' => $Penghasilan_Rata_10s,
					'Kesehatan_Rata_10s' => $Kesehatan_Rata_10s,
					'Kondisi_Rata_10s' => $Kondisi_Rata_10s,
					'Kendaraan_Rata_10s' => $Kendaraan_Rata_10s,
					'Status_Rata_10s' => $Status_Rata_10s,
					);

				$this->m_kriteria->update(array('id' => '0'), $data);
				$this->m_kriteria->update1(array('id' => '0'), $data1);
				echo json_encode(array("status" => TRUE));

	}










	public function v_perhitungan()
	{
		$data['contents'] = 'V_ps_uptd/content/v_perhitungan';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_analisa()
	{
		$data['contents'] = 'V_ps_uptd/content/v_analisa';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_grafik()
	{
		$data['contents'] = 'V_ps_uptd/content/v_grafik';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_datasiswa()
	{
		$data['contents'] = 'V_ps_uptd/content/v_datasiswa';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_uploadsurat()
	{
		$data['contents'] = 'V_ps_uptd/content/v_uploadsurat';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_informasi()
	{
		$data['contents'] = 'V_ps_uptd/content/v_informasi';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_laporan()
	{
		$data['contents'] = 'V_ps_uptd/content/v_laporan';
		$this->load->view('V_ps_uptd/index',$data);
	}


}
