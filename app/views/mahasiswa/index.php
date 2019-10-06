<div class="container mt-3" >
	<div class="row">
		<div class="col-lg-g">
			<?php Flasher::flash(); ?>
		</div>
		
	</div>
	<div class="row">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
  Tambah data mahasiswa
</button>
			<br><br>

			<h3>daftar mahasiswa</h3>
				
					<ul class="list-group">
						<?php foreach ($data['mhs'] as $mhs ) :?>
					  		<li class="list-group-item"><?= $mhs['nama'];  ?>
					  		
					  		<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
					  		<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
					  		<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right ml-1">detail</a> 
					  		</li>
					  <?php endforeach; ?>
					</ul>
				
				
			
		</div>
	</div>

</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="dudulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">tambah data mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        	<input type="hidden" name="id" id="id">
        	 <div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" class="form-control" id="nama" name=" nama" >
			  </div>
			  <div class="form-group">
			    <label for="nrp">NRP</label>
			    <input type="number" class="form-control" id="nrp" name="nrp" >
			  </div>
			  <div class="form-group">
			    <label for="email">email</label>
			    <input type="email" class="form-control" id="email" name="email" >
			  </div>

			  <div class="form-group">
			    <label for="jurusan">jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Teknik informatika">Teknik informatika</option>
			      <option value="Teknik mesin">Teknik Mesein</option>
			      <option value="Teknik Industri">Teknik Industri</option>
			      <option value="Teknik pangan">Teknik pangan</option>
			      <option value="Teknik planologi">Teknik planologi</option>
			      <option value="Teknik lingkungan">Teknik Lingkungan</option>
			      
			    </select>
			  </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
    	</form>
      </div>
    </div>
  </div>
</div>