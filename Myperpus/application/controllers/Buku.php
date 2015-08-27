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
			echo "<td><button type='button' id='removebook' data-id='".$row->id_buku."' class='btn btn-danger btn-mini'><span class='glyphicon glyphicon-erase'></span></button>
				 <button type='button' id='editbook' data-id='".$row->id_buku."' class='btn btn-info btn-mini'><span class='glyphicon glyphicon-edit'></span></button>
			</td>";
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
			if(!empty($id)){
				$data['status'] = 'true';
				$this->Buku_model->remove_buku($id);
				echo json_encode($data);
				exit();
			}else {
				echo json_encode($data);
				exit();
			}
		}else {
			show_404();
		}
	}
	public function add_book(){
		$data['nama_buku'] = $this->input->post('nama');
		$data['jenis_buku'] = $this->input->post('jenis');
		$id = $this->input->post('id_buku');
		if(empty($data['nama_buku']) or empty($data['jenis_buku'])){
			show_404();
		}else {
			$d['status'] = '';
			if(empty($id)){
				if($this->Buku_model->add_book($data) == TRUE){
					$d['status'] = 'TRUE';
					echo json_encode($d);
					exit();
				}else {
					$d['status'] = 'FALSE';
					echo json_encode($d);
					exit();
				}
			}else {
				if($this->Buku_model->update_book($data,$id) == TRUE){
					$d['status'] = 'TRUE';
					echo json_encode($d);
					exit();
				}else {
					$d['status'] = 'FALSE';
					echo json_encode($d);
					exit();
				}
			}
		}
	}
	public function select_book(){
		$id = $this->input->post('id_buku');
		if(empty($id)){
			show_404();
		}else {
			$data['item'] = $this->Buku_model->select_book($id);
			echo json_encode($data);
		}
	}

}
?>