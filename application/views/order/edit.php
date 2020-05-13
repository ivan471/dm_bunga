<div class="content-body">
	<div class="container-fluid">
		<div class="col-md-7 mx-auto">
			<div class="card">
				<div class="card-header mx-auto">
					<h3>Edit Order Bunga</h3>
				</div>
				<form class="ml-5 mr-5" action="<?= base_url().'edit_item' ?>" method="post">
					<div class="form-group">
						<label for="">Kode Barang</label>
						<input class="form-control" type="text" name="id" value="<?= $bunga['id'] ?>" readonly>
					</div>
					<div class="form-group">
						<label for="">Nama Barang</label>
						<input class="form-control" type="text" name="nama" value="<?= $bunga['nama'] ?>" readonly>
					</div>
					<div class="form-group">
						<label for="">Harga Barang</label>
						<input class="form-control" type="text" name="harga" value="<?= $bunga['harga'] ?>" readonly>
					</div>
					<div class="form-group">
						<label for="">Jumlah</label>
						<input class="form-control" type="number" name="jumlah" value="<?= $bunga['jumlah'] ?>" required>
					</div>
					<div class="form-group">
						<center>
							<button type="submit" name="button" class="save">Simpan</button>
						</center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
