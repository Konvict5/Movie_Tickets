<?php

Class Movies extends CI_Controller{

	public function view()
	{
		$this->load->view('template/header');
		$this->load->view('template/main');
		$this->load->view('template/footer');
	}
}