<div class="content-body">
	<div class="container-fluid">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
					Pilih Bunga
				</div>
				<input type="search" class="form-control mx-auto mt-2" style="width:95%" id="myInput" onkeyup="myFunction()" placeholder="Cari Nama Bunga">
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
