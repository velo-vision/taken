<?php 
include('funtions.php');
getHeader();
getAside(); 

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Resumen de Actividad        
      </h1>     
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner uno">
            <img src="img/index/img-1.png" class="resumen">
              <h3>$25,000,000</h3>
              <p>SALDO TOTAL</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner dos">
            <img src="img/index/img-2.png" class="resumen">
              <h3>$12,200,000</h3>
              <p>GASTO PROMEDIO MENSUAL</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner tres">
            <img src="img/index/img-3.png" class="resumen">
              <h3>$1,000,000</h3>
              <p>GASTOS PROMEDIO DIARIO</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cuatro">
            <img src="img/index/img-4.png" class="resumen">
              <h3>$50,000</h3>
              <p>USURAIOS REGISTRADOS</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- OTROS 4 -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cinco">
            <img src="img/index/img-5.png" class="resumen">
              <h3>100,000</h3>
              <p>TAGS REGISTRADOS</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner seis">
            <img src="img/index/img-6.png" class="resumen">
              <h3>2</h3>
              <p>PROMEDIO DE TAGS POR USUARIO</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner siete">
            <img src="img/index/img-7.png" class="resumen">
              <h3>25 lt.</h3>
              <p>RECARGA DE GASOLINA PROM. X USUARIO</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner ocho">
            <img src="img/index/img-8.png" class="resumen">
              <h3>$370</h3>
              <p>COSTO PROM. DE RECARGAS X USUARIO</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- DOS MAS -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner nueve">
            <img src="img/index/img-9.png" class="resumen">
              <h3>10,000,000</h3>
              <p>SALDO AL CORTE SEMANAL</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner diez">
            <img src="img/index/img-10.png" class="resumen">
              <h3>10,000,000</h3>
              <p>PAGO AL CORTE SEMANAL</p>
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
          <h3>
            Gasolineras
          </h3> 
          <!-- tablas -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Promedio de Recargas</th>
                    <th>Acumulado de Recargas</th>
                    <th>Acumulado de Litros Magna</th>
                    <th>Acumulado de Pesos Magna</th>
                    <th>Acumulado de Litros Premium</th>
                    <th>Acumulado de Pesos Premium</th>
                    <th>Acumulado de Litros Diesel</th>
                    <th>Acumulado de Pesos Diesel</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                  <th>Lorem ipsum Dolor sir S:A de CV</th>
                  <th>300</th>
                  <th>2,300</th>
                  <th>25,000</th>
                  <th>$345,000</th>
                  <th>30,000</th>
                  <th>$420,000</th>
                  <th>$50,000</th>
                  <th>$540,000</th>
                </tr>
               <?php } ?>
                </tbody> 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    
          <!-- /.box -->
          <!-- fin tablas -->
        </section>
        <!-- /.Left col -->
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php getFooter(); ?>