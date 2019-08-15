<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ps_uptd extends CI_Controller {

	public function index()
	{
		$data['contents'] = 'V_ps_uptd/content/dashboard';
		$this->load->view('V_ps_uptd/index',$data);
	}

	public function v_kriteria()
	{
		$data['contents'] = 'V_ps_uptd/content/v_kriteria';
		$this->load->view('V_ps_uptd/index',$data);
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
