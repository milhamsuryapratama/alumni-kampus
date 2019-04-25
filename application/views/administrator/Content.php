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
        <div class="col-md-6">

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

        <div class="col-md-6">
          
          <!-- DONUT CHART -->
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data Alumni Per Kecamatan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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

    foreach($jml as $data){
      $jml[]  = $data->count;
    }    
} ?>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/chart.js/Chart.js"></script>

<script>
    $(function() {

    var p = <?php echo json_encode($jml); ?>;

    // console.log(p);

    var donutChart = [];

    var o = ["2",'5'];

    var kecamatan = [];
    var nama_kecamatan = <?php echo json_encode($nama_kec);?>;
    var color = ["#f56954","#00a65a","#f39c12","#00c0ef","#3c8dbc","#d2d6de"];
    var n = 0;

    $.post("<?=base_url()?>administrator/jml_alumni_per_kecamatan", {}, (result) => {
        console.log(result);
        result.map(data => {
          kecamatan.push(data.count);
          donutChart.push({
            value    : data.count,
            color    : color[n],
            highlight: color[n],
            label    : nama_kecamatan[n]
          }) 
          n++;          
        })
    })

    // var donutInterval = setInterval(displayDonutChart, 0);

    // function displayDonutChart() {
    //   kecamatan.map(data => {
    //     donutChart.push({
    //         value    : kecamatan,
    //         color    : '#f56954',
    //         highlight: '#f56954',
    //         label    : nama_kecamatan[n]
    //       })
    //     n++;
    //   })
    //   clearInterval(donutInterval);      
    // }

    var interval = setInterval(displayChart, 800);
      
      function displayChart() {

        var areaChartData = {
          labels  : nama_kecamatan,
          datasets: [
          {
            label               : 'Electronics',
            fillColor           : '#3b8bba',
            strokeColor         : '#3b8bba',
            pointColor          : '#3b8bba',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : kecamatan
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

        //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieChart       = new Chart(pieChartCanvas)
      var PieData        = donutChart
      var pieOptions     = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke    : true,
        //String - The colour of each segment stroke
        segmentStrokeColor   : '#fff',
        //Number - The width of each segment stroke
        segmentStrokeWidth   : 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps       : 100,
        //String - Animation easing effect
        animationEasing      : 'easeOutBounce',
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate        : true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale         : false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive           : true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio  : true,
        //String - A legend template
        legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      pieChart.Doughnut(PieData, pieOptions)

      clearInterval(interval);

      }

    })

</script>