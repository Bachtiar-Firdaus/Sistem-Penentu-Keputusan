<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//daus
class C_kadis_sos_prov extends CI_Controller {

	public function index()
	{
		$data['contents'] = 'V_kadis_sos_prov/content/dashboard';
		$this->load->view('V_kadis_sos_prov/index',$data);
	}
	public function informasi_siswa()
	{
		$data['contents'] = 'V_kadis_sos_prov/content/informasi_siswa';
		$this->load->view('V_kadis_sos_prov/index',$data);
	}

	public function v_laporan_datasiswa()
	{
		$data['contents'] = 'V_kadis_sos_prov/content/v_laporan_datasiswa';
		$this->load->view('V_kadis_sos_prov/index',$data);
	}
}
