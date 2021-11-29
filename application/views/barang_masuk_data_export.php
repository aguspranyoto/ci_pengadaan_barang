<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=barang_masuk.xls" );
?>

<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID Barang Masuk</th>
			<th>User ID</th>
			<th>Barang ID</th>
			<th>Jumlah Masuk</th>
			<th>Tanggal Masuk</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_barang_masuk as $barang_masuk):?>
		<tr>
			<td><?php echo $barang_masuk['id_barang_masuk'];?></td>
			<td><?php echo $barang_masuk['username_masuk'];?></td>
			<td><?php echo $barang_masuk['nama_barang_masuk'];?></td>
			<td><?php echo $barang_masuk['jumlah_masuk'];?></td>
			<td><?php echo $barang_masuk['tanggal_masuk'];?></td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

<!-- 
id_barang_masuk
user_id
barang_id
jumlah_masuk
tanggal_masuk
