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
	function add_book($data){
		$this->db->insert('master_buku',$data);
		return TRUE;
	}
	function select_book($id){
		return $this->db->get_where('master_buku',array('id_buku'=>$id))->row();
	}
	function update_book($data,$id){
		$this->db->where('id_buku',$id);
		$this->db->update('master_buku',$data);
		return TRUE;
	}
}
