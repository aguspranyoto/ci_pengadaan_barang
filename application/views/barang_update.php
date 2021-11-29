
<!--$data_barang_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('barang/update_submit/'.$data_barang_single['id_barang']);?>">
	<table class="table table-striped">
		<tr>
			<td>Nama Barang</td>
			<!--$data_barang_single['nama'] : menampilkan data barang yang dipilih dari database -->
			<td><input type="text" name="nama_barang" value="<?php echo $data_barang_single['nama_barang'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Stok</td>
			<!--$data_barang_single['nama'] : menampilkan data barang yang dipilih dari database -->
			<td><input type="text" name="stok" value="<?php echo $data_barang_single['stok'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Kategori barang</td>
			<!--$data_barang_single['judul'] : menampilkan data barang yang dipilih dari database -->
			<td>
				<select name="kategori_barang_id" class="form-control">
				<?php foreach($data_kategori_barang as $kategori_barang):?>
				<option value="<?php echo $kategori_barang['id_kategori'];?>">
					<?php echo $kategori_barang['kategori_barang'];?>
				</option>
				<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
</form>
