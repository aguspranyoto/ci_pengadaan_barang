
<a href="<?php echo site_url('barang_keluar/insert');?>" class="btn btn-primary">Tambah Data</a>
<a href="<?php echo site_url('barang_keluar/dashboard');?>" class="btn btn-success">Dashboard</a>
<!--<a href="<?php echo site_url('barang_keluar/data_export');?>" class="btn btn-primary">Export Data</a>
<a href="<?php echo site_url('barang_keluar/read_rekap');?>" class="btn btn-primary">Lihat Rekap Data</a>
<a href="<?php echo site_url('barang_keluar/export_rekap');?>" class="btn btn-primary">Cetak Rekap Data</a>
-->
<br /><br />

<table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>
			<th>Jumlah</th>
			<th>Tanggal</th>
			<th>Nama Barang</th>
			<th>User</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($data_barang_keluar as $barang_keluar):?>
		<tr>
			<td><?php echo $barang_keluar['jumlah_keluar'];?></td>
			<td><?php echo $barang_keluar['tanggal_keluar'];?></td>
			<td><?php echo $barang_keluar['nama_barang_keluar'];?></td>
			<td><?php echo $barang_keluar['username_keluar'];?></td>
			<td>
				<a class="btn btn-warning"href="<?php echo site_url('barang_keluar/update/'.$barang_keluar['id_barang_keluar']);?>">
				Ubah
				</a>
				
				<a class="btn btn-danger" href="<?php echo site_url('barang_keluar/delete/'.$barang_keluar['id_barang_keluar']);?>"onclick="return confirm('Yakin Hapus?')">
				Hapus
				</a>
			</td>
		</tr>
		<?php endforeach?>		
	</tbody>
</table>