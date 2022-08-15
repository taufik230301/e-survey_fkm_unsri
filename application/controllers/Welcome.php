<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_provinsi');
    }

	public function index()
	{
		
		$data['provinsi'] = $this->m_provinsi->read_all_provinsi()->result_array();

		echo var_dump($data);
		die();
	}
}
