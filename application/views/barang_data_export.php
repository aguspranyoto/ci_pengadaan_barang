<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=barang.xls" );
?>

<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Stok</th>
			<th>Kategori Barang ID</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_barang as $barang):?>
		<tr>
			<td><?php echo $barang['id_barang'];?></td>
			<td><?php echo $barang['nama_barang'];?></td>
			<td><?php echo $barang['stok'];?></td>
			<td><?php echo $barang['kategori_barang_kategori_barang'];?></td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

<!-- 

id_barang	
nama_barang	
stok	
kategori_barang_id	
	
