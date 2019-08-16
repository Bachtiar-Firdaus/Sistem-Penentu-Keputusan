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
		$this->load->model('m_pertanyaan');
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
		$data['contents'] = 'V_psm_kab/content/K_pertanyaantemp';
		$this->load->view('V_psm_kab/index',$data);
        $x['dcs'] = $this->m_calon_siswa->getdcs(); 
		$this->load->view('V_psm_kab/content/K_pertanyaan_a',$x,$data);
	}

	public function simpan_pertanyaan()
	{
			
		$data = array(
				'id_cs'=> $this->input->post('nama'),
				'nama_a' => $this->input->post('nama_a'),
				'nama_i' => $this->input->post('nama_i'),
				'umur_a' => $this->input->post('umur_a'),
				'umur_a_t' => $this->input->post('umur_a_t'),
				'umur_i' => $this->input->post('umur_i'),
				'umur_i_t' => $this->input->post('umur_i_t'),
				'agama_a' => $this->input->post('agama_a'),
				'agama_i' => $this->input->post('agama_i'),
				'alamat_a_d' => $this->input->post('alamat_a_d'),
				'alamat_a_kec' => $this->input->post('alamat_a_kec'),
				'alamat_a_kab' => $this->input->post('alamat_a_kab'),
				'alamat_i_d' => $this->input->post('alamat_i_d'),
				'alamat_i_kec' => $this->input->post('alamat_i_kec'),
				'alamat_i_kab' => $this->input->post('alamat_i_kab'),
				'pekerjaan_a' => $this->input->post('pekerjaan_a'),
				'pekerjaan_i' => $this->input->post('pekerjaan_i'),
				'jumlah_s' => $this->input->post('jumlah_s'),
				'keadaan_lingkungan1' => $this->input->post('keadaan_lingkungan1'),
				'keadaan_lingkungan2' => $this->input->post('keadaan_lingkungan2'),
				'keadaan_lingkungan3' => $this->input->post('keadaan_lingkungan3'),
				'keadaan_lingkungan4' => $this->input->post('keadaan_lingkungan4'),
				'keadaan_lingkungan5a' => $this->input->post('keadaan_lingkungan5a'),
				'keadaan_lingkungan5b' => $this->input->post('keadaan_lingkungan5b'),
				'keadaan_lingkungan5c' => $this->input->post('keadaan_lingkungan5c'),
				'keadaan_lingkungan6' => $this->input->post('keadaan_lingkungan6'),
				'motivasi_1' => $this->input->post('motivasi_1'),
				'motivasi_2' => $this->input->post('motivasi_2'),
				'motivasi_3' => $this->input->post('motivasi_3'),
				'motivasi_4' => $this->input->post('motivasi_4'),
				'motivasi_5' => $this->input->post('motivasi_5'),
				'motivasi_6' => $this->input->post('motivasi_6'),
				'motivasi_7' => $this->input->post('motivasi_7'),
				'penggunaan_1' => $this->input->post('penggunaan_1'),
				'penggunaan_2' => $this->input->post('penggunaan_2'),
				'penggunaan_3' => $this->input->post('penggunaan_3'),
				'penggunaan_4' => $this->input->post('penggunaan_4'),
				'penggunaan_5' => $this->input->post('penggunaan_5'),
				'penggunaan_6' => $this->input->post('penggunaan_6'),
				'evaluasi_1' => $this->input->post('evaluasi_1'),
				'evaluasi_2' => $this->input->post('evaluasi_2'),
				'evaluasi_3' => $this->input->post('evaluasi_3'),
				'evaluasi_4' => $this->input->post('evaluasi_4'),
				'evaluasi_5' => $this->input->post('evaluasi_5'),
			);
		$insert = $this->m_calon_siswa->save1($data);
		echo json_encode(array("status" => TRUE));

		$data1 = array(
				'con' => "2",
			);	
		$this->m_calon_siswa->update1(array('nama' => $this->input->post('nama')), $data1);
		echo json_encode(array("status" => TRUE));

		$data['contents'] = 'V_psm_kab/content/K_pertanyaan_a';
		$this->load->view('V_psm_kab/index',$data);
	
	}
	public function ajax_list1()
	{
		$list = $this->m_pertanyaan->get_datatables();
		$data = array();
		$no = $_POST['start'];

		foreach ($list as $m_pertanyaan) {		
			$row = array();
            $row[] = $no++;
            $row[] = $m_pertanyaan->id_cs;

			//add html for action
                	$row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="CETAK" onclick="delete_m_calon_siswa('."'".$m_pertanyaan->id."'".')"><i class="glyphicon glyphicon-trash"></i> CETAK</a>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->m_pertanyaan->count_all(),
						"recordsFiltered" => $this->m_pertanyaan->count_filtered(),
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
