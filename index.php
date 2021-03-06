<?php
include('funtions.php');
getHeader();
getAside();

?>
<style>
#nuno a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.nuno i{
  color: #fff !important;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <h1>
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Resumen de Actividad
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".1s">
          <div class="small-box bg-aqua">
            <div class="inner uno">
            <img src="img/index/img-7.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>ACUMULADO ANTES DEL CORTE</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".2s">
          <div class="small-box bg-aqua">
            <div class="inner dos">
            <img src="img/index/img-7.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>SALDO POR COBRAR AL CORTE</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".3s">

          <div class="small-box bg-aqua">
            <div class="inner tres">
            <img src="img/index/img-7.png" class="resumen">
              <h3>$100,000</h3>
              <p>VENTA PROMEDIO AL DÍA</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".4s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cuatro">
            <img src="img/index/img-5.png" class="resumen">
              <h3>2,200,000</h3>
              <p>VENTA PROMEDIO MENSUAL</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- OTROS 4 -->
      <div class="row">

        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".1s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cinco">
            <img src="img/index/img-1.png" class="resumen">
              <h3>$10,000,000</h3>
              <p>HISTORICO VENDIDO</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".2s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner seis">
            <img src="img/index/img-11.png" class="resumen" style="opacity: .5;">
              <h3>80</h3>
              <p>TERMINALES ACTIVAS</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- FIN -->
      <!-- /.row -->
      <!-- Main row -->



      <div class="row">
        <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bottom-20">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <p class="size-titulo margin-circulo">
                  <i class="fa fa-circle rotar azul-circulo" aria-hidden="true"></i><strong> Grupo:</strong> Lorem ipsum Dolor Sit S. A. de C.V.
                </p>
                <p class="size-titulo margin-circulo">
                  <i class="fa fa-circle rotar azul-circulo" aria-hidden="true"></i><strong> RFC:</strong> Historial de Dispersiones
                </p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-2 margin-circulo">
                <div class=" col-xs-12 col-sm-12 col-md-12">
                  <a href="#"><span class="añadir-gasolinera"><img src="img/gas.png" alt="">Añadir Gasolinera</span></a>
                </div>
              </div>
            </div>
          <!-- tablas -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example12" class="table table-hover">
                <thead>
                  <tr>
                    <th>ID de Gasolineras</th>
                    <th>Nombre / Alias de gasolinera</th>
                    <th>Razón Social</th>
                    <th>Ubicación</th>
                    <th>Número de Terminales</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                  <th class="centers">Pemex-291038402</th>
                  <th class="centers">Lodermos Asturias Df</th>
                  <th class="centers">Pemex S. A. de C.V.</th>
                  <th class="centers">Nemo Enim ipsam #32.5 Voluptatem CDMX</th>
                  <th class="centers">6</th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 centers">
          <ul class="pagination">
            <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"><</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
            <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
            <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
            <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
            <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
            <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">></a></li>
          </ul>
        </div>
      </div>
          <!-- /.box -->
          <!-- fin tablas -->
        </section>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 class="size-titulo">
              <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Volumen de Venta por Tipo de Gasolina
            </h3>
          </div>
          <div class="col-md-12">
            <div class="col-xs-12 col-sm-6 col-md-6 margin-fecha centers">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" id="reservation">
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 no-pad">
              <div class="grafica-color">
                <p class="grafica-fecha">30/09/2012</p>
                <div class="col-md-12">
                  <p><span class="color-1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Diesel</p>
                  <p><span class="color-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Gasolina Premium</p>
                  <p><span class="color-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Gasoline Magna</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row grafica-center">
            <!-- Left col -->
            <div class="col-md-10 col-md-offset-1">
              <canvas id="canvas" class="height-grafica"></canvas>
            </div>
            <!-- /.Left col -->
          </div>
        </div>

      </div>

      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <script>
      // var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
      var lineChartData = {
        labels : ["Lorem Ipsum","Lorem Ipsum","Lorem Ipsum","Lorem Ipsum","Lorem Ipsum","Lorem Ipsum"],
        datasets : [
          {
            label: "My First dataset",
            fillColor : "rgba(239,81,63,0.7)",
            strokeColor : "rgba(127,215,197,1)",
            pointColor : "rgba(127,215,197,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(127,215,197,1)",
            data : [17000,27000,24000,19000,19000,30000,37000]
          },
          {
            label: "My Second dataset",
            fillColor : "rgba(155,211,79,0.7)",
            strokeColor : "rgba(197,162,212,1)",
            pointColor : "rgba(197,162,212,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(197,162,212,1)",
            data : [36000,28000,16000,16000,24000,25000,16000]
          },
          {
            label: "My Second dataset",
            fillColor : "rgba(31,186,225,0.7)",
            strokeColor : "rgba(197,162,212,1)",
            pointColor : "rgba(197,162,212,1)",
            pointStrokeColor : "#fff",
            pointHighlightFill : "#fff",
            pointHighlightStroke : "rgba(243,106,90,1)",
            data : [8000,7500,7600,3000,4000,7600,7500]
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
  <!-- /.content-wrapper -->
  <?php getFooter(); ?>
