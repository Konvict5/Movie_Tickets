<?php


Class Movie_model extends CI_model{
	public function book_ticket($id)
	{
		$this->db->select('*');
		$this->db->from('movies');
		$this->db->where(' movie_id = ', $id);
		$q = $this->db->get();
        return $q->result_array();
	}
	
}