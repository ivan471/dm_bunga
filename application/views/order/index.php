<div class="content-body">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" style="width:3%">No</th>
								<th scope="col" style="width:30%">Nama Bunga</th>
								<th scope="col">Harga</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
								<th scope="col" style="width:25%">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; foreach ($order as $b): ?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<td><?= $b['nama']; ?></td>
									<td><?= $b['harga']; ?></td>
									<td><?= $b['jumlah']; ?></td>
									<td><?= $b['total']; ?></td>
									<td>
										<form class="" action="<?= base_url().'edit/'.$b['id'] ?>" method="post">
											<button type="submit" name="button" class="edit float-left">Edit</button>
										</form>
										<form class="" action="<?= base_url().'delete/'.$b['id'] ?>" method="post">
											<button type="submit" name="button" class="delete float-right">delete</button>
										</form>
									</td>
								</tr>
								<?php $i++; endforeach; ?>
							</tbody>
						</table>
						<div class="row mx-auto">
							<a href="<?= base_url().'cetak' ?>" class="save mb-3 mr-3" style="padding:12px 40px;">Cetak</a>
							<a href="<?= base_url().'cancel' ?>" class="delete mb-3" style="padding:12px 40px;">Batal</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header">
							Tambah Orderan
						</div>
						<a href="<?= base_url().'add' ?>" class="save mb-2 mt-2 mx-auto">Tambah Order</a>
					</div>
				</div>
			</div>
		</div>
	</div>
