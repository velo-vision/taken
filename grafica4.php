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
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Finanzas <span class="mayor">
      </h1>
    </section>
    <!-- Main content -->
    <section class="content size">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
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
        <div class="col-lg-3 col-xs-6">
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
      <div class="row grafica-center">
        <!-- Left col -->
        <div class="col-md-12">
          <h3 class="linea">
            <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Balance <span class="mayor">
          </h3>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <canvas id="canvas" class="height-grafica"></canvas>
        </div>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->
<script>
    // var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
    var lineChartData = {
      labels : ["Lorem Ipsum","Lorem Ipsum","Lorem Ipsum","Lorem Ipsum","Lorem Ipsum","Lorem Ipsum"],
      datasets : [
        {
          label: "My First dataset",
          fillColor : "rgba(127,215,197,0.7)",
          strokeColor : "rgba(127,215,197,1)",
          pointColor : "rgba(127,215,197,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(127,215,197,1)",
          data : [30000,32000,20000,21000,28000,29000,20000]
        },
        {
          label: "My Second dataset",
          fillColor : "rgba(197,162,212,0.7)",
          strokeColor : "rgba(197,162,212,1)",
          pointColor : "rgba(197,162,212,1)",
          pointStrokeColor : "#fff",
          pointHighlightFill : "#fff",
          pointHighlightStroke : "rgba(197,162,212,1)",
          data : [25000,30000,28000,21000,22000,30000,30000]
        }
      ]

    }

  window.onload = function(){
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myLine = new Chart(ctx).Line(lineChartData, {
      responsive: true
    });
  }
  </script>
  <?php getFooter(); ?>
