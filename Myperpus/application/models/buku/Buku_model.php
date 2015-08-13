<?php
class Buku_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function get() {
		return $this->db->get_where('master_buku')->result();
	}
	function remove_buku($id){
		$this->db->where('id_buku',$id);
		$this->db->delete('master_buku');
	}
}
