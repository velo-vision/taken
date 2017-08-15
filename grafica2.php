<?php
include('funtions.php');
getHeader();
getAside();

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h1 class="linea">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Balance <span class="mayor">
      </h1>
    </section>
    <!-- Main content -->
    <section class="content size">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".2s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner once">
            <img src="img/index/img-1.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>SALDO TOTAL ACTUAL</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".2s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner doce">
            <img src="img/index/img-2.png" class="resumen" style="opacity: .7;">
              <h3>$1,000,000</h3>
              <p>SALDO PROMEDIO MENSUAL</p>
            </div>
          </div>
        </div>
      <!-- /.row -->
      </div>
    </section>

        <!-- /.Left col -->
       <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <h3 class="linea">
            <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Balance <span class="mayor">
          </h3>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div id="graficados"></div>

           <div id="graficaPAA211" style="height: 400px"></div>
        </div>
        <div ng-app="app" ng-controller="BaseCtrl">
          <canvas id="base"
                  class="chart-base"
                  chart-type="type"
                  chart-series="series"
                  chart-data="data"
                  chart-options="options"
                  chart-labels="labels"
                  chart-dataset-override="datasetOverride">
          </canvas>

        </div>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js'></script>
  <?php getFooter(); ?>
<script type="text/javascript">
  var lugar = document.getElementById("graficados");

var chart = AmCharts.makeChart(lugar, {
  "type": "serial",
  "theme": "light",
  "dataProvider": chartData,
  "trendLines": trendLines,
  "valueAxes": [{
    "gridAlpha": 0.07,
    "position": "left",
    "title": "Unit failure volume"
  }],
  "graphs": [{
    "title": "value",
    "type": "smoothedLine",
    "valueField": "value",
    "labelColorField": "labelColor",
    "fillColorsField": "fillColor",
    "lineThickness": 3,
    "fillAlphas": 0.3,
    "labelText": "[[label]]",
    "labelOffset": 20,
    "fontSize": 15
  }],
  "categoryField": "year",
  "categoryAxis": {
    "startOnAxis": true
  }
});
</script>