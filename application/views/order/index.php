<div class="content-body">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<input type="search" class="form-control mx-auto mt-2" style="width:95%" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Bunga" aria-label="Search Dashboard">
					<table id="myTable" class="table">
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
									<td>Rp.<?= number_format($b['harga'], 0, ".", ".") ?></td>
									<td><?= $b['jumlah']; ?></td>
									<td>Rp.<?= number_format($b['total'], 0, ".", ".") ?></td>
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
								<tr>
									<th></th>
									<th></th>
									<th></th>
									<th></th>
									<th>Rp.<?= number_format($total['SUM(total)'], 0, ".", ".") ?></th>
								</tr>
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
	<script>
	function myFunction() {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			}
		}
	}
	</script>
