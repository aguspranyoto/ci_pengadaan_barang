<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $judul?></title>
</head>
<body>


<div id="container"></div>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">

Highcharts.chart('container', {

title: {
    text: 'Data Stok barang'
},

subtitle: {
    text: 'Inpiniscarves'
},

yAxis: {
    title: {
        text: 'Jumlah Stok barang'
    }
},

xAxis: {
    categories:[<?php foreach($data_barang as $barang):?>'<?php echo $barang['nama_barang'];?>',
                <?php endforeach?>]
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
    }
},

series: [{
    name:'Stok',
    data:[<?php foreach($data_barang as $barang):?> <?php echo $barang['stok'];?>,<?php endforeach?>]
				
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>

</body>
</html>