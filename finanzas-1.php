<?php 
include('funtions.php');
getHeader();
getAside(); 

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <h1 class="linea">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Finanzas
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
              <p>SALDO ACTUAL</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner doce">
            <img src="img/index/img-2.png" class="resumen">
              <h3>$12,200,000</h3>
              <p>SALDO HISTORICO MENSUAL</p>
            </div>                        
          </div>
        </div>  
        <div class="col-ss-12 col-lg-12">
       <ul class="enlinea">
         <li><img src="img/index/punto.png">  Usuario: <span>Edmundo Rodirguez</span></li>
         <li><img src="img/index/punto.png">  Tag <span>Lorem ipsum dolor</span></li>
         <li><img src="img/index/punto.png">  Vehiculo Asociado: <span>volkswagen</span></li>
         <li><img src="img/index/punto.png">  Placas: <span>71RNA</span></li>
       </ul>
        </div>      
      <!-- /.row -->     
      </div>     
      <div class="form-group linea2 tag2">        
        <select class="form-control">
          <option>MONTO</option>r
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div> 
      <div class="form-group linea2 tag2">        
        <select class="form-control">
          <option>FECHA</option>
          <option>option 2</option>
          <option>option 3</option>
          <option>option 4</option>
          <option>option 5</option>
        </select>
      </div>
    </section>
    <!-- /.Left col -->
    <section class="content"> 
    <div style=" margin: 0">
    <!-- grafica -->
       <div id="container1" class="grafica1"></div>
    </div>
    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->
  <?php getFooter(); ?>