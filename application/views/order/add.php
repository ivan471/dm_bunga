<div class="content-body">
	<div class="container-fluid">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					Pilih Bunga
				</div>
				<table class="table" id="myTable">
					<thead>
						<tr>
							<th scope="col" style="width:7%">No</th>
							<th scope="col" style="width:45%">Nama Bunga</th>
							<th scope="col" style="width:15%">Harga</th>
							<th scope="col" style="width:15%">Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($bunga as $b): ?>
							<tr class="id">
								<form action="<?= base_url().'add_item' ?>" method="post">
									<input type="hidden" name="id" value="<?= $b['id']; ?>">
									<input type="hidden" name="nama" value="<?= $b['nama']; ?>">
									<input type="hidden" name="harga" value="<?= $b['harga']; ?>">
									<th scope="row"><?= $i; ?></th>
									<td><?= $b['nama']; ?></td>
									<td>Rp.<?= number_format($b['harga'], 0, ".", ".") ?></td>
									<td><input class="form-control" type="number" name="jumlah" min="0" maxlength="2" required></td>
									<td><button class="save" type="submit">Pilih</button></td>
								</form>
							</tr>
							<?php $i++; endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
