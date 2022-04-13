<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=barang_keluar_detail.xls");
?>
 <table class="table table-striped table-responsive">
				<thead class="thead-dark">
					<tr>
						<th>Nama Barang keluar</th>
						<th>Tanggal keluar</th>
						<th>Jumlah keluar</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data_barang_keluar as $barang_keluar):?>
					<tr>
						<td><?php echo $barang_keluar['nama_barang_keluar'];?></td>
						<td><?php echo $barang_keluar['tanggal_keluar'];?></td>
						<td><?php echo $barang_keluar['jumlah_keluar'];?></td>
					<td><?php echo $barang_keluar['username_keluar'];?></td></tr>
					<?php endforeach?>		
				</tbody>
			</table>