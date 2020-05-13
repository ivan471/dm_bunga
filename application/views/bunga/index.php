<div class="content-body">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<table class="table">
						<thead>
							<tr>
								<th scope="col" style="width:3%">No</th>
								<th scope="col" style="width:30%">Nama Bunga</th>
								<th scope="col">Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; foreach ($bunga as $b): ?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<td><?= $b['nama']; ?></td>
									<td><?= $b['harga']; ?></td>
									<td>
										<form class="" action="<?= base_url().'edit_bunga/'.$b['id'] ?>" method="post">
											<button type="submit" name="button" class="edit float-left">Edit</button>
										</form>
									</td>
								</tr>
								<?php $i++; endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header mx-auto">
							<h4>Tambah Bunga</h4>
						</div>
						<a href="<?= base_url().'add_bunga' ?>" class="save mb-2 mt-2 mx-auto">Tambah</a>
					</div>
				</div>
			</div>
		</div>
	</div>
