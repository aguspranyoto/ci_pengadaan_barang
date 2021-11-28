
<!--link tambah data-->
<a href="<?php echo site_url('kategori_barang/insert');?>" class="btn btn-primary">Tambah Data</a>
<br /><br />

<table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>nama kategori_barang</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data kategori_barang-->
		<?php foreach($data_kategori_barang as $kategori_barang):?>

		<!--cetak data per baris-->
		<tr>
			<td><?php echo $kategori_barang['kategori_barang'];?></td>
			<td>
				<!--link ubah data (menyertakan id_kategori_barang per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('kategori_barang/update/'.$kategori_barang['id_kategori']);?>" class="btn btn-warning">
				Ubah
				</a>

				<!--link hapus data (menyertakan id_kategori_barang per baris untuk dikirim ke controller)-->
				<a href="<?php echo site_url('kategori_barang/delete/'.$kategori_barang['id_kategori']);?>" onClick="return confirm('Apakah anda yakin?')" class="btn btn-danger">
				Hapus
				</a>
				
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>

</body>
</html>