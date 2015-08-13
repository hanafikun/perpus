<?php
class Buku extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('nav/Nav_model','buku/Buku_model'));
	}

	public function get_book(){
		$book = $this->Buku_model->get();
			echo "<div class='table-responsive'>";
			echo "<table class='table table-striped table-hover table-condensed table-bordered'>";
			echo "<tr class='active'><th>No</th>";
			echo "<th>Nama Buku</th>";
			echo "<th>Jenis Buku</th>";
			echo "<th>Action</th>";
			echo "</tr>";
			$i = 1;
		foreach ($book as $row) {
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row->nama_buku."</td>";
			echo "<td>".$row->jenis_buku."</td>";
			echo "<td><button type='button' id='removebook' data-id='".$row->id_buku."' class='btn btn-danger btn-mini'><span class='glyphicon glyphicon-erase'></span></td>";
			echo "</tr>";
			$i++;
		}
			echo "<table>";
			echo "</div>";
		exit();
	}
	public function remove_book(){
		$id = $this->input->post('id_buku');
		$data['status'] = 'false';
		if(!empty($id)){
			$data['status'] = 'true';
			$this->Buku_model->remove_buku($id);
			echo json_encode($data);
			exit();
		}else {
			echo json_encode($data);
			exit();
		}
	}

}
?>