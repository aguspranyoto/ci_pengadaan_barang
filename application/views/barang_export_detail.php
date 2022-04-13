<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=barang_detail.xls");
?>
	<table class="table table-striped table-responsive">
					<thead class="thead-dark">
						<tr>
							<th>Nama Barang</th>
							<th>Stok</th>
							<th>Kategori Barang ID</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($data_barang as $barang):?>
						<tr>
							<td><?php echo $barang['nama_barang'];?></td>
							<td><?php echo $barang['stok'];?></td>
							<td><?php echo $barang['kategori_barang_kategori_barang'];?></td>
						</tr>
						<?php endforeach?>		
					</tbody>
				</table>