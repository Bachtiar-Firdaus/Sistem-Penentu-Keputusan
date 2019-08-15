<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_psm_kab extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		
/*		if($this->session->userdata('akses') != "ADMIN"){
			$url=base_url();
			redirect($url);
		}*/

		$this->load->model('m_calon_siswa');
	}

	public function index()
	{
		$data['contents'] = 'V_psm_kab/content/dashboard';
		$this->load->view('V_psm_kab/index',$data);
	}
/////////////////////////////////////////////////////////////////////////////////////////////////
	public function calon_siswa()
	{
		$data['contents'] = 'V_psm_kab/content/K_calon_siswa';
		$this->load->view('V_psm_kab/index',$data);
	}

	public function ajax_list()
	{
		$list = $this->m_calon_siswa->get_datatables();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $m_calon_siswa) {		
			$row = array();
            $row[] = $no++;
            $row[] = $m_calon_siswa->nama;
            $row[] = $m_calon_siswa->jk;
            $row[] = $m_calon_siswa->ttl;
            $row[] = $m_calon_siswa->agama;
            $row[] = $m_calon_siswa->suku;
            $row[] = $m_calon_siswa->bahasa;
            $row[] = $m_calon_siswa->desa;
            $row[] = $m_calon_siswa->kecamatan;
            $row[] = $m_calon_siswa->kabupaten;
            $row[] = $m_calon_siswa->pt_k1;
            $row[] = $m_calon_siswa->pt_k2;
            $row[] = $m_calon_siswa->pt_k3;
            $row[] = $m_calon_siswa->atls;
            $row[] = $m_calon_siswa->km;
            $row[] = $m_calon_siswa->mn;
            $row[] = $m_calon_siswa->pb;
            $row[] = $m_calon_siswa->bpbd_k1;
            $row[] = $m_calon_siswa->bpbd_k2;
            $row[] = $m_calon_siswa->bpbd_k3;
            $row[] = $m_calon_siswa->bpbd_k4;

			//add html for action
                	$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_m_calon_siswa('."'".$m_calon_siswa->id."'".')"><i class="glyphicon glyphicon-pencil"></i> EDIT</a><a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_m_calon_siswa('."'".$m_calon_siswa->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_calon_siswa->count_all(),
						"recordsFiltered" => $this->m_calon_siswa->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id)
	{
		$data = $this->m_calon_siswa->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{

		$data = array(
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'ttl' => $this->input->post('ttl'),
				'agama' => $this->input->post('agama'),
				'suku' => $this->input->post('suku'),
				'bahasa' => $this->input->post('bahasa'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'pt_k1' => $this->input->post('pt_k1'),
				'pt_k2' => "sampai kelas",
				'pt_k3' => $this->input->post('pt_k3'),
				'atls' => $this->input->post('atls'),
				'km' => $this->input->post('km'),
				'mn' => $this->input->post('mn'),
				'pb' => $this->input->post('pb'),
				'bpbd_k1' => $this->input->post('bpbd_k1'),
				'bpbd_k2' => "Gaji",
				'bpbd_k3' => $this->input->post('bpbd_k3'),
				'bpbd_k4' => "Perbulan",
			);
		$insert = $this->m_calon_siswa->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		date_default_timezone_set("Asia/Jakarta");/*
		date("Y-m-d H:i:s"),*/

		$data = array(
				'nama' => $this->input->post('nama'),
				'jk' => $this->input->post('jk'),
				'ttl' => $this->input->post('ttl'),
				'agama' => $this->input->post('agama'),
				'suku' => $this->input->post('suku'),
				'bahasa' => $this->input->post('bahasa'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'pt_k1' => $this->input->post('pt_k1'),
				'pt_k2' => $this->input->post('pt_k2'),
				'pt_k3' => $this->input->post('pt_k3'),
				'atls' => $this->input->post('atls'),
				'km' => $this->input->post('km'),
				'mn' => $this->input->post('mn'),
				'pb' => $this->input->post('pb'),
				'bpbd_k1' => $this->input->post('bpbd_k1'),
				'bpbd_k2' => $this->input->post('bpbd_k2'),
				'bpbd_k3' => $this->input->post('bpbd_k3'),
				'bpbd_k4' => $this->input->post('bpbd_k4'),
			);	

		$this->m_calon_siswa->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->m_calon_siswa->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}




/////////////////////////////////////////////////////////////////////////////////////////////////

	public function pertanyaan()
	{
		$data['contents'] = 'V_psm_kab/content/K_pertanyaantemp';
		$this->load->view('V_psm_kab/index',$data);
        $x['dcs'] = $this->m_calon_siswa->getdcs(); 
		$this->load->view('V_psm_kab/content/K_pertanyaan',$x,$data);
	}

	public function pertanyaan_a()
	{
		$data['contents'] = 'V_psm_kab/content/K_pertanyaan_a';
		$this->load->view('V_psm_kab/index',$data);
	}
		public function ajax_list1()
	{
		$list = $this->m_calon_siswa->get_datatables();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $m_calon_siswa) {		
			$row = array();
            $row[] = $no++;
            $row[] = $m_calon_siswa->nama;

			//add html for action
                	$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="CETAK" onclick="delete_m_calon_siswa('."'".$m_calon_siswa->id."'".')"><i class="glyphicon glyphicon-trash"></i> CETAK</a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_calon_siswa->count_all(),
						"recordsFiltered" => $this->m_calon_siswa->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}




	

	public function upload_berkas()
	{
		$data['contents'] = 'V_psm_kab/content/K_upload_berkas';
		$this->load->view('V_psm_kab/index',$data);
	}
	public function penilaian()
	{
		$data['contents'] = 'V_psm_kab/content/K_penilaian';
		$this->load->view('V_psm_kab/index',$data);
	}
	public function hasil_analisa()
	{
		$data['contents'] = 'V_psm_kab/content/K_hasil_analisa';
		$this->load->view('V_psm_kab/index',$data);
	}
	public function laporan_pernyataan()
	{
		$data['contents'] = 'V_psm_kab/content/K_laporan_pernyataan';
		$this->load->view('V_psm_kab/index',$data);
	}
	public function lihat_kriteria()
	{
		$data['contents'] = 'V_psm_kab/content/K_kriteria';
		$this->load->view('V_psm_kab/index',$data);
	}

	public function v_pengumuman()
	{
		$data['contents'] = 'V_psm_kab/content/v_pengumuman';
		$this->load->view('V_psm_kab/index',$data);
	}
}
