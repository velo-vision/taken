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
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group listas-fij">
                  <select class="form-control texto-res">
                    <option>FECHA</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                  <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group listas-fij">
                    <select class="form-control texto-res">
                      <option>MONTO</option>r
                      <option>option 2</option>
                      <option>option 3</option>
                      <option>option 4</option>
                      <option>option 5</option>
                    </select>
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
                    <th>Razón Social</th>
                    <th>Total vendido</th>
                    <th>Venta Premium</th>
                    <th>Venta Magna</th>
                    <th>Venta Diesel</th>
                    <th>Monto Cobrado</th>
                    <th>Periodo</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                  <th class="centers">Pemex-291038402</th>
                  <th class="centers">Pemex S. A. de C.V.</th>
                  <th class="centers">$100,000</th>
                  <th class="centers">$20,000</th>
                  <th class="centers">$60,000</th>
                  <th class="centers">$40,000</th>
                  <th class="centers">$90,000</th>
                  <th class="centers">2/08/2017 2/08/2017</th>
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
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php getFooter(); ?>
