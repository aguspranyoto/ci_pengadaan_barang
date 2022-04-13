<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=barang_masuk_detail.xls");
?>
            <table class="table table-striped table-responsive">
				<thead class="thead-dark">
					<tr>
						<th>Nama Barang Masuk</th>
						<th>Tanggal Masuk</th>
						<th>Jumlah Masuk</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data_barang_masuk as $barang_masuk):?>
					<tr>
						<td><?php echo $barang_masuk['nama_barang_masuk'];?></td>
						<td><?php echo $barang_masuk['tanggal_masuk'];?></td>
						<td><?php echo $barang_masuk['jumlah_masuk'];?></td>
					<td><?php echo $barang_masuk['username_masuk'];?></td></tr>
					<?php endforeach?>		
				</tbody>
			</table>