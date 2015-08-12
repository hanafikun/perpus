<?php
class Nav_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	function get() {
		return $this->db->get_where('navigasi',array('is_active'=>0,'have_child'=>0))->result();
	}
	function get_have_child() {
		return $this->db->get_where('navigasi',array('is_active'=>0,'have_child'=>1))->result();
	}
}
