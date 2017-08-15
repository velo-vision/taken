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
        <div class="col-xs-12 col-md-10 col-md-offset-1 grafica-center">
          <h3 class="linea">
            <i class="fa fa-sort-asc rotar color-azul1" aria-hidden="true"></i> Gastos x usuario <span class="mayor">
          </h3>
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-6 col-md-6 grafica-color">
              <span class="color-grafica">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span> &nbsp;Movimientos</span>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 grafica-color1">
              <span class="color-grafica1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span><span> &nbsp;Cargas de gasolina</span>
            </div>
          </div>
          <canvas id="canvas" height="250" width="600" class="height-grafica"></canvas>
        </div>
        <!-- <div class="col-md-10 col-md-offset-1"> -->
         <!--  <div id="graficaPAA211" style="height: 400px"></div> -->
          <!-- <canvas id="canvas" height="250" width="600"></canvas>
        </div> -->
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->
<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : ["Lorem ipsum","Lorem ipsum","Lorem ipsum","Lorem ipsum","Lorem ipsum"],
    datasets : [
      {
        fillColor : "rgba(142,204,244,0.5)",
        strokeColor : "rgba(142,204,244,0.8)",
        highlightFill: "rgba(142,204,244,0.75)",
        highlightStroke: "rgba(142,204,244,1)",
        data : [10000,20000,40000,20000,30000]
      },
      {
        fillColor : "rgba(50,197,210,0.5)",
        strokeColor : "rgba(50,197,210,0.8)",
        highlightFill : "rgba(50,197,210,0.75)",
        highlightStroke : "rgba(50,197,210,1)",
        data : [20000,25000,25000,25000,25000]
      }
    ]

  }
  window.onload = function(){
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
      responsive : true
    });
  }

  </script>
  <?php getFooter(); ?>
