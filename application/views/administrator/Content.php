<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
              
                <div class="box box-success">
                    <div class="box-header with-border">
                      <h3 class="box-title">Data Alumni Per Kecamatan</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="barChart" style="height:230px"></canvas>
                </div>
            </div>
            
        </div>
            </div>
        </div>
    		
    </section>
</div>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.4.0
	</div>
	<strong>Copyright © 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
reserved.</strong>
</footer>

<?php if ($title == "Dashboard") {
    foreach($kecamatan as $data){
      $nama_kec[] = $data->nama_kecamatan;      
    }

    foreach($kecamatan as $data){
      $id_kec[]  = $data->id_kecamatan;
    }    
} ?>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/chart.js/Chart.js"></script>

<script>
    $(function() {

    var p = <?php echo json_encode($id_kec); ?>;

    console.log(p);

    var o = [2,5];
    console.log(o);

    //console.log(p);
    var kecamatan = [];

    $.post("<?=base_url()?>administrator/get_kecamatan", {}, (result) => {
        console.log(result);
        kecamatan.push(result);
        console.log(kecamatan[0]);
        // $.map(result, function(val, i) {
        //     kecamatan.push(val.nama_kecamatan);
        //     console.log(kecamatan);
        // })
    })

    var areaChartData = {
      labels  : <?php echo json_encode($nama_kec);?>,
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : '#3b8bba',
          strokeColor         : '#3b8bba',
          pointColor          : '#3b8bba',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : o
        }
        // {
        //   label               : 'Digital Goods',
        //   fillColor           : 'rgba(60,141,188,0.9)',
        //   strokeColor         : 'rgba(60,141,188,0.8)',
        //   pointColor          : '#3b8bba',
        //   pointStrokeColor    : 'rgba(60,141,188,1)',
        //   pointHighlightFill  : '#fff',
        //   pointHighlightStroke: 'rgba(60,141,188,1)',
        //   data                : [28, 48, 40, 19, 86, 27, 90]
        // }
      ]
    }

    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData
    // barChartData.datasets[1].fillColor   = '#00a65a'
    // barChartData.datasets[1].strokeColor = '#00a65a'
    // barChartData.datasets[1].pointColor  = '#00a65a'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
    })

</script>