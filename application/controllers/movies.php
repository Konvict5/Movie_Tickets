<?php

Class Movies extends CI_Controller{

	public function view()
	{
		$this->load->view('template/header');
		$this->load->view('template/main');
		$this->load->view('template/footer');
	}
	public function book_ticket()
	{
		$id = $this->uri->segment(3);
		$data['all_resources'] = $this->movie_model->book_ticket($id);
		$this->load->view('book_ticket', $data);
	}
	public function view_all_movies(){
		$this->load->view('template/header');
		$this->load->view('view_movies');
		$this->load->view('template/footer');
	}
	public function login()
	{

		$this->load->view('login');
	}
}