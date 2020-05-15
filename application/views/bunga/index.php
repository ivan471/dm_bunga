<div class="content-body">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<input type="search" class="form-control mx-auto mt-2" style="width:95%" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Bunga" aria-label="Search Dashboard">
					<table id="myTable" class="table mt-3">
						<thead>
							<tr>
								<th scope="col" style="width:4%">No</th>
								<th scope="col" style="width:45%">Nama Bunga</th>
								<th scope="col" style="width:25%">Harga</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; foreach ($bunga as $b): ?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<td><?= $b['nama']; ?></td>
									<td>Rp.<?= number_format($b['harga'], 0, ".", ".") ?></td>
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
