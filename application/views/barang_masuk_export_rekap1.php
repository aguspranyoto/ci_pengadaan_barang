<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=barang_masuk_rekap1.xls");
?>
<table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Total Barang Masuk</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang_masuk-->
        <?php foreach ($data_barang_masuk3  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data['tanggal_masuk_barang_masuk']; ?></td>
                <td><?= $data['total_jumlah_masuk']; ?></td>
            </tr>
        <?php endforeach; ?>	
	</tbody>
</table>