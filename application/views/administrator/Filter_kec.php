<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Dashboard Admin
        <?php 
              if ($this->session->userdata('id_lembaga') == 1) {
                   echo "FKSJ";
              } elseif ($this->session->userdata('id_lembaga') == 2) {
                  echo "P4NJ";
              } else {
                  echo "NJIC";
              }
          ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Administrator</a></li>
        <li class="active">Dashboard Admin 
          <?php 
              if ($this->session->userdata('id_lembaga') == 1) {
                   echo "FKSJ";
              } elseif ($this->session->userdata('id_lembaga') == 2) {
                  echo "P4NJ";
              } else {
                  echo "NJIC";
              }
          ?>
        </li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <p style="margin-top: 10px">Filter Data Berdasarkan Kecamatan</p>
        </div>
        <div class="col-md-6">
          <input type="hidden" name="filter_id_kec" id="filter_id_kec">
          <select class="form-control" id="filterKec" name="filterKec">
            <option selected>Pilih Kecamatan</option>
            <?php foreach ($kecamatan as $k) { 
              if ($k->id_kecamatan == $current_id) { ?>
                <option value="<?=$k->id_kecamatan?>" selected><?=$k->nama_kecamatan?></option>
              <?php } else { ?>
                <option value="<?=$k->id_kecamatan?>"><?=$k->nama_kecamatan?></option>
              <?php } ?>              
                
            <?php } ?>
          </select>          
        </div>
        <div class="col-md-3">
          <p style="margin-top: 10px">Kecamatan : <?php foreach ($kecamatan as $k) {
            if ($k->id_kecamatan == $current_id) {
              echo $k->nama_kecamatan;
            }
          } ?> | Jumlah Desa : <?php if ($title == "Dashboard") {
            echo count($desa);
          } ?></p>
        </div>
      </div>
      <br>
      <div class="row">      

        <div class="col-md-6" align="center">
          
          <!-- BAR CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Alumni Per Desa</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="barChart"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

        <div class="col-md-6" align="center">
          
          <!-- BAR CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Alumni Per Desa</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="barChart2"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>

      </div>
    		
    </section>
</div>

<?php if ($title == "Dashboard") {

    foreach ($desa as $d) {
      $nama_d[] = $d->nama_desa;
      $id_des[] = $d->id_desa;
    }
    
} ?>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/chart.js/Chart.js"></script>

<script>

    $(function() {    

    var donutData = [];
    var desa = [];

    var id_desa = <?php echo json_encode($id_des); ?>;
    var nama_desa = <?php echo json_encode($nama_d);?>;    

    var count_desa = [];

    var warna = ["#f56954","#00a65a","#f39c12","#00c0ef","#3c8dbc","#d2d6de", "#4286f4", "#41f4d6", "#4cf441", "#df41f4", "#f44141", "#f4c141", "#41f4af"];

    var n = 0;

    $.post("<?=base_url()?>administrator/jml_alumni_per_desa", {id: id_desa}, (result) => {
        result.map(res => {
          count_desa.push(res.jml);
          donutData.push({
            value: res.jml,
            color: warna[n],
            highlight: warna[n],
            label: nama_desa[n]
          })
          n++;
        })

    })  

    $("#filterKec").change(function() {
      let filterKec = $("#filterKec").val();
      window.location.href = `<?=base_url()?>administrator/filter_kec/${filterKec}`;
    })  

    var interval = setInterval(displayChart, 800);
      
      function displayChart() {

        var areaChartData = {
          labels  : nama_desa,
          datasets: [
            {
              label               : 'Electronics',
              fillColor           : '#3b8bba',
              strokeColor         : '#3b8bba',
              pointColor          : '#3b8bba',
              pointStrokeColor    : '#c1c7d1',
              pointHighlightFill  : '#fff',
              pointHighlightStroke: 'rgba(220,220,220,1)',
              data                : count_desa
            }
          ]
        }      

      
      //data alumni per desa

      var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
      var barChart                         = new Chart(barChartCanvas)
      var barChartData                     = areaChartData

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
      barChart.Bar(barChartData, barChartOptions);

      var pieChartCanvas = $('#barChart2').get(0).getContext('2d')
      var pieChart       = new Chart(pieChartCanvas)
      var PieData        = donutData
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