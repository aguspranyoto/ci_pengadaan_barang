<table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Stok</th>
			<th>Total Barang</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang-->
        <?php foreach ($data_barang_keluar  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data["nama_barang_keluar"]; ?></td>
                <td><?= $data['tanggal_keluar_barang_keluar']; ?></td>
                <td><?= $data['total_jumlah_keluar']; ?></td>
            </tr>
        <?php endforeach; ?>
	</tbody>
</table>



