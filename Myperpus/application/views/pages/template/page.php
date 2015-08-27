<div class="container notif" hidden>
		<div class="alert alert-info" id="notifhapus" role="alert">
			<strong>Pemberitahuan :</strong><div class="text"> Data berhasil dihapus</div>
		</div>
</div>
<div class="container data">
	
</div>
<div class="container">
	<button type="button" class="btn btn-info show-form"><span class="glyphicon glyphicon-plus"></span></button>
	<button type="button" class="btn btn-default hide-form" style="display:none" ><span class="glyphicon glyphicon-remove"></span></button>
</div>
<div class="container form" hidden>
	<form class="form-horizontal" role="form">
	  <div class="form-group" id="group-nama">
	    <label class="control-label col-sm-2" for="email">Nama Buku:</label>
	    <div class="col-sm-10">
	      <input type="hidden" name="id" value="" id="id_buku">
	      <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Buku">
	      <div class="help-block nama" style="display:none;color:red">*Wajib diisi</div>
	    </div>
	  </div>
	  <div class="form-group" id="group-jenis">
	    <label class="control-label col-sm-2" for="pwd">Jenis Buku:</label>
	    <div class="col-sm-10"> 
	      <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Jenis Buku">
	      <div class="help-block jenis" style="display:none;color:red">*Wajib diisi</div>
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="button" onclick="insert()" class="btn btn-default value">Simpan</button>
	    </div>
	  </div>
	</form>
</div>
