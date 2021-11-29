
<!--link tambah data-->
<a href="<?php echo site_url('barang/insert');?>" class="btn btn-primary">Tambah Data</a>
<a href="<?php echo site_url('barang/data_export');?>" class="btn btn-primary">Export Data</a>
<a href="<?php echo site_url('chart/pie');?>" class="btn btn-primary "><i class="fas fa-chart-pie"></i></a>
<a href="<?php echo site_url('chart/column');?>" class="btn btn-primary"><i class="fas fa-chart-bar"></i></a>
<a href="<?php echo site_url('chart/line');?>" class="btn btn-primary"><i class="fas fa-chart-line"></i></a>
<br /><br />

<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>ID Barang</th>
			<th>Nama Barang</th>
			<th>Stok</th>
			<th>Kategori</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang-->
		<?php foreach($data_barang as $barang):?>

		<!--cetak data per baris-->
		
		<tr>
			<td><?php echo $barang['id_barang'];?></td>
			<td><?php echo $barang['nama_barang'];?></td>
			<td><?php echo $barang['stok'];?></td>
			<td><?php echo $barang['kategori_barang_kategori_barang'];?></td>
			<td>
				<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('barang/update/'.$barang['id_barang']);?>" class="btn btn-warning">
				Ubah
				</a>

				<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('barang/delete/'.$barang['id_barang']);?>" onClick="return confirm('Apakah anda yakin?')" class="btn btn-danger">
				Hapus
				</a>
				
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

</body>
</html>