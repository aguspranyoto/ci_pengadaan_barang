<a href="<?php echo site_url('barang_keluar/read');?>" class="btn btn-primary">&larr; Kembali</a>
<br><br>

<div class="row">

<div class="col-lg-6">

    <!-- Default Card Example -->
    <div class="card mb-4">
    <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Grafik Rekap</h6>
        </div>
        <div id="container"></div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
	// Build the chart
	Highcharts.chart('container', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: 'Perbandingan Total Barang keluar antar Barang'
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.y}</b>'
	    },
	    accessibility: {
	        point: {
	            valueSuffix: '%'
	        }
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: false
	            },
	            showInLegend: true
	        }
	    },
	    series: [{
	        name: 'Jumlah Barang_keluar',
	        colorByPoint: true,

	        //format data jumlah_stok barang_keluar
	        data: [
	        		<?php foreach($data_barang_keluar2 as $barang_keluar):?>
	        		{
	        			name: '<?php echo $barang_keluar['nama_barang_keluar'];?>',
	        			y: <?php echo $barang_keluar['total_jumlah_keluar'];?>},
			        <?php endforeach?>
			   	]

	        //format data original
	        /*
	        data: [
	        		{
			            name: 'Chrome',
			            y: 61.41
			        }, 
			        {
			            name: 'Internet Explorer',
			            y: 11.84
			        }, 
			        {
			            name: 'Firefox',
			            y: 10.85
			        },
			   	]
			*/
	    }]
	});
</script>
    </div>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Nama Barang per Total Barang keluar</h6>
        </div>
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
    </div>
	<a href="<?php echo site_url('barang_keluar/export_rekap2');?>" class="btn btn-primary">Cetak</a>
</div>

<div class="col-lg-6">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Tanggal keluar per Total Barang keluar</h6>
        </div>
        <table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Tanggal keluar</th>
			<th>Total Barang keluar</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang_keluar-->
        <?php foreach ($data_barang_keluar3  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data['tanggal_keluar_barang_keluar']; ?></td>
                <td><?= $data["total_jumlah_keluar"]; ?></td>

            </tr>
        <?php endforeach; ?>	
	</tbody>
</table>
</div>
<div>

	<a href="<?php echo site_url('barang_keluar/export_rekap1');?>" class="btn btn-primary">Cetak</a>
</div>
<br><br>
    <!-- Collapsable Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Lengkap</h6>
        </div>
        <!-- Card Content - Collapse -->
 <!-- Card Body -->
 <table class="table table-striped">
				<thead class="thead-dark">
					<tr>
						<th>Nama Barang keluar</th>
						<th>Tanggal keluar</th>
						<th>Jumlah keluar</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data_barang_keluar as $barang_keluar):?>
					<tr>
						<td><?php echo $barang_keluar['nama_barang_keluar'];?></td>
						<td><?php echo $barang_keluar['tanggal_keluar'];?></td>
						<td><?php echo $barang_keluar['jumlah_keluar'];?></td>
					<td><?php echo $barang_keluar['username_keluar'];?></td></tr>
					<?php endforeach?>		
				</tbody>
			</table>
    </div>
	<a href="<?php echo site_url('barang_keluar/export_detail');?>" class="btn btn-primary">Cetak</a>
</div>

</div>

