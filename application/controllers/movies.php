<?php

Class Movies extends CI_Controller{

	public function view()
	{
		$this->load->view('template/header');
		$this->load->view('template/main');
		$this->load->view('template/footer');
	}
<<<<<<< HEAD:Movie_Tickets/application/controllers/movies.php
=======
	public function book_ticket()
	{
		$id = $this->uri->segment(3);
		$data['all_resources'] = $this->movie_model->book_ticket($id);
		$this->load->view('book_ticket', $data);
	}
>>>>>>> 90c4a8cdac85ece4b5d31923cfaf9d522ab05377:application/controllers/movies.php
	public function view_all_movies(){
		$this->load->view('template/header');
		$this->load->view('view_movies');
		$this->load->view('template/footer');
	}
<<<<<<< HEAD:Movie_Tickets/application/controllers/movies.php
=======
	public function login()
	{

		$this->load->view('login');
	}
>>>>>>> 90c4a8cdac85ece4b5d31923cfaf9d522ab05377:application/controllers/movies.php
}