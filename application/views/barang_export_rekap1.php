<?php
	header( "Content-Type: application/vnd.ms-excel" );
	header( "Content-disposition: attachment; filename=barang_rekap1.xls" );
?>

<table class="table table-striped table-responsive">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Total Barang</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang-->
        <?php foreach ($data_barang2  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data['kategori_barang_kategori_barang']; ?></td>
                <td><?= $data["total_barang"]; ?></td>

            </tr>
        <?php endforeach; ?>	
	</tbody>
	</table>