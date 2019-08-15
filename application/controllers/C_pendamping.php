<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pendamping extends CI_Controller {

	public function index()
	{
		$data['contents'] = 'V_pendamping/content/dashboard';
		$this->load->view('V_pendamping/index',$data);
	}

	public function v_kelola_siswa()
	{
		$data['contents'] = 'V_pendamping/content/v_kelola_siswa';
		$this->load->view('V_pendamping/index',$data);
	}

}
