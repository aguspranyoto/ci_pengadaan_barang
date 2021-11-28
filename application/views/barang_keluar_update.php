
<!--$data_barang_keluar_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('barang_keluar/update_submit/'.$data_barang_keluar_single['id_barang_keluar']);?>">
	<table class="table table-striped">
		<tr>
			<td>jumlah_keluar</td>
			<td><input type="text" name="jumlah_keluar" value="<?php echo $data_barang_keluar_single['jumlah_keluar'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>tanggal_keluar</td>
			<td><input type="date" name="tanggal_keluar" value="<?php echo $data_barang_keluar_single['tanggal_keluar'];?>" required="" class="form-control"></td>
		</tr>
		<tr>
			<td>Nama barang</td>
			<!--$data_barang_single['judul'] : menampilkan data barang yang dipilih dari database -->
			<td>
				<select name="barang_id" class="form-control">
				<?php foreach($data_barang as $barang_id):?>
				<option value="<?php echo $barang_id['id_barang'];?>">
					<?php echo $barang_id['nama_barang'];?>
				</option>
				<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>username</td>
			<!--$data_barang_single['judul'] : menampilkan data barang yang dipilih dari database -->
			<td>
				<select name="user_id" class="form-control">
				<?php foreach($data_user as $user_id):?> 
				<option value="<?php echo $user_id['id'];?>">
					<?php echo $user_id['username'];?>
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
