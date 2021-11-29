<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=barang_keluar.xls" );
?>

<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID Barang Keluar</th>
			<th>User ID</th>
			<th>Barang ID</th>
			<th>Jumlah Keluar</th>
			<th>Tanggal Keluar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_barang_keluar as $barang_keluar):?>
		<tr>
			<td><?php echo $barang_keluar['id_barang_keluar'];?></td>
			<td><?php echo $barang_keluar['username_keluar'];?></td>
			<td><?php echo $barang_keluar['nama_barang_keluar'];?></td>
			<td><?php echo $barang_keluar['jumlah_keluar'];?></td>
			<td><?php echo $barang_keluar['tanggal_keluar'];?></td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

<!-- 
id_barang_keluar
user_id
barang_id
jumlah_keluar
tanggal_keluar
