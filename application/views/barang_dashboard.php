<a href="<?php echo site_url('barang/read');?>" class="btn btn-primary">&larr; Kembali</a>
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
	        text: 'Perbandingan Jumlah barang antar Kategori'
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
	        name: 'Jumlah Barang',
	        colorByPoint: true,

	        //format data jumlah_stok barang
	        data: [
	        		<?php foreach($data_barang2 as $barang):?>
	        		{
	        			name: '<?php echo $barang['kategori_barang_kategori_barang'];?>',
	        			y: <?php echo $barang['total_barang'];?>},
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
	<br><br>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Kategori per Stok</h6>
        </div>
        <table class="table table-striped">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Stok</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data barang-->
        <?php foreach ($data_barang2  as $no => $data) : ?>
            <tr>
                <td><?= $no + 1; ?></td>
                <td><?= $data['kategori_barang_kategori_barang']; ?></td>
                <td><?= $data['stok']; ?></td>
            </tr>
        <?php endforeach; ?>	
	</tbody>
</table>
	</div>
	<div>
	<a href="<?php echo site_url('barang/export_rekap2');?>" class="btn btn-primary">Cetak</a>
	</div>
	</div>

	<div class="col-lg-6">

    <!-- Dropdown Card Example -->
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Rekap Kategori per Total barang</h6>
        </div>
        <table class="table table-striped">
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
</div>
	<div>
	<a href="<?php echo site_url('barang/export_rekap1');?>" class="btn btn-primary">Cetak</a>
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
	<table class="table table-striped table-responsive">
					<thead class="thead-dark">
						<tr>
							<th>Nama Barang</th>
							<th>Stok</th>
							<th>Nama Kategori</th>
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
		</div>
		<a href="<?php echo site_url('barang/export_detail');?>" class="btn btn-primary">Cetak</a>
		</div>


	</div>

