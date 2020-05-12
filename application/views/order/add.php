<div class="content-body">
	<div class="container-fluid">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Pilih Bunga
				</div>
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
								<td></td>
							</tr>
							<?php $i++; endforeach; ?>
						</tbody>
					</table>
			</div>
		</div>
	</div>
</div>
