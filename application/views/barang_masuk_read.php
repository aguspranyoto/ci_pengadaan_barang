
<a href="<?php echo site_url('barang_masuk/insert');?>" class="btn btn-primary">Tambah Data</a>
<a href="<?php echo site_url('barang_masuk/dashboard');?>" class="btn btn-success">Dashboard</a>
<!--<a href="<?php echo site_url('barang_masuk/data_export');?>" class="btn btn-primary">Export Data</a>
<a href="<?php echo site_url('barang_masuk/read_rekap');?>" class="btn btn-primary">Lihat Rekap Data</a>
<a href="<?php echo site_url('barang_masuk/export_rekap');?>" class="btn btn-primary">Cetak Rekap Data</a>
-->
<br /><br />

<table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>
			<th>Jumlah</th>
			<th>Tanggal</th>
			<th>Nama barang</th>
			<th>User</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_barang_masuk as $barang_masuk):?>
		<tr>
			<td><?php echo $barang_masuk['jumlah_masuk'];?></td>
			<td><?php echo $barang_masuk['tanggal_masuk'];?></td>
			<td><?php echo $barang_masuk['nama_barang_masuk'];?></td>
			<td><?php echo $barang_masuk['username_masuk'];?></td>
			<td>
				<a class="btn btn-warning"href="<?php echo site_url('barang_masuk/update/'.$barang_masuk['id_barang_masuk']);?>">
				Ubah
				</a>
				
				<a class="btn btn-danger" href="<?php echo site_url('barang_masuk/delete/'.$barang_masuk['id_barang_masuk']);?>"onclick="return confirm('Yakin Hapus?')">
				Hapus
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>