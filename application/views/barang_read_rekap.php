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
        <?php foreach ($data_barang  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data['kategori_barang_kategori_barang']; ?></td>
                <td><?= $data['stok']; ?></td>
                <td><?= $data["total_barang"]; ?></td>

            </tr>
        <?php endforeach; ?>	
	</tbody>
</table>