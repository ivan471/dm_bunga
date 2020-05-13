<div class="content-body">
	<div class="container-fluid">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header mx-auto">
					<h3>Form Tambah Bunga</h3>
				</div>
				<form class="ml-5 mr-5" action="<?= base_url().'save_add' ?>" method="post">
					<div class="form-group">
						<label for="">Nama Bunga</label>
						<input class="form-control" type="text" name="nama" required>
					</div>
					<div class="form-group">
						<label for="">Harga Bunga</label>
						<input class="form-control" type="number" name="harga" min="0" required>
					</div>
					<center>
						<button type="submit" name="button" class="save mb-5">Simpan</button>
					</center>
				</form>
			</div>
		</div>
	</div>
</div>
