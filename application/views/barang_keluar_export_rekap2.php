<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=barang_keluar_rekap2.xls");
?>
        <table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Total Barang keluar</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang_keluar-->
        <?php foreach ($data_barang_keluar2  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data['nama_barang_keluar']; ?></td>
                <td><?= $data['total_jumlah_keluar']; ?></td>
            </tr>
        <?php endforeach; ?>	
	</tbody>
</table>