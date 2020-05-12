<div class="content-body">
	<div class="container-fluid">
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
						<a href="#" class="save mb-5 mx-auto">Cetak</a>
				</div>
			</div>
		</div>
	</div>
