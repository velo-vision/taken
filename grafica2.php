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
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <h3 class="linea">
            <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Balance <span class="mayor">
          </h3>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <div id="divuno"></div>
           <div id="graficaPAA211" style="height: 400px"></div>
        </div>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->

  <?php getFooter(); ?>
