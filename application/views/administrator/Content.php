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
            <?php foreach ($kecamatan_filter as $k) { ?>              
                <option value="<?=$k->id_kecamatan?>"><?=$k->nama_kecamatan?></option>
            <?php } ?>
          </select>          
        </div>
      </div>
      <br>
      <div class="row">        
        <div class="col-md-6">

          <div class="box box-primary">
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
                <canvas id="barChart" height="40vh" width="80vw"></canvas>
              </div>
            </div>
            <div class="box-header with-border">
              <h3 class="box-title" style="color: red; font-style: italic;">Note: Jumlah Alumni Terbanyak di 10 Kecamatan</h3>
            </div>
            
          </div>

        </div>

        <div class="col-md-6">
          
          <!-- DONUT CHART -->
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
              <canvas id="barChart2" style="height:230px"></canvas>
            </div>
            <!-- /.box-body -->
            <div class="box-header with-border">
              <h3 class="box-title" style="color: red; font-style: italic;">Note: Jumlah Alumni Terbanyak di 10 Desa</h3>
            </div>
          </div>
          <!-- /.box -->

        </div>

      </div>
    		
    </section>
</div>

<?php if ($title == "Dashboard") {
    // foreach($kecamatan as $data){
    //   $nama_kec[] = $data->nama_kecamatan;   
    //   $id_kec[] = $data->id_kecamatan;
    // }

    foreach ($desa as $d) {
      $data_desa[] = $d;
    }

    foreach ($kecamatan as $k) {
      $data_kecamatan[] = $k;
    }
    
} ?>

<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/chart.js/Chart.js"></script>

<script>

    $(function() {    

    var id_kecamatan = [];
    var nama_kecamatan = [];

    var id_desa = [];
    var nama_desa = [];

    var count_kecamatan = [];
    var count_desa = [];

    var nm = <?php echo json_encode($data_kecamatan); ?>;
    var ds = <?php echo json_encode($data_desa); ?>

    nm.sort(function(a,b) {
      if (a.jml > b.jml) {
        return -1;
      }

      if (a.jml < b.jml) {
        return 1;
      }

      return 0;
    })

    ds.sort(function(a,b) {
      if (a.jml > b.jml) {
        return -1;
      }

      if (a.jml < b.jml) {
        return 1;
      }

      return 0;
    })

    //console.log(ds);
    nm.map(a => {
      //console.log(a.id_kecamatan);  
      id_kecamatan.push(a.id_kecamatan)     ;
    })

    ds.map(b => {
      id_desa.push(b.id_desa);
    })

    $.post("<?=base_url()?>administrator/jml_alumni_per_kecamatan", {id: id_kecamatan}, (result) => {
      //console.log(result);
      for (var i = 0; i < 10; i++) {
        count_kecamatan.push(result[i].jml);  
        nama_kecamatan.push(result[i].nama_kecamatan);
      } 

    })

    //console.log(id_kecamatan);    

    $.post("<?=base_url()?>administrator/jml_alumni_per_desa", {id: id_desa}, (result) => {
      //console.log(result);
      for (var i = 0; i < 10; i++) {
        count_desa.push(result[i].jml);
        nama_desa.push(result[i].nama_desa);
      } 

    })  

    $("#filterKec").change(function() {
      let filterKec = $("#filterKec").val();
      $("#filter_id_kec").val(filterKec);

      window.location.href = `<?=base_url()?>administrator/filter_kec/${filterKec}`;
    })   

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
              data                : count_kecamatan
            }
          ]
        }

        var areaChartData2 = {
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

      //data alumni per kecamatan

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
      barChart.Bar(barChartData, barChartOptions)

      
      //data alumni per desa

      var barChartCanvas2                   = $('#barChart2').get(0).getContext('2d')
      var barChart2                         = new Chart(barChartCanvas2)
      var barChartData2                     = areaChartData2

      var barChartOptions2                  = {
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

      barChartOptions2.datasetFill = false
      barChart2.Bar(barChartData2, barChartOptions2)

      clearInterval(interval);

      }   

    })    

</script>