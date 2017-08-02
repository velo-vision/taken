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
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Tag <span class="mayor"> > </span> <span class="r">Resumen</span>
      </h1>
      <h4 class="id">
        ID: 2910384562
      </h4>    
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
              <h3>$100,000</h3>
              <p>SALDO ACTUAL</p>
            </div>                        
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner doce">
            <img src="img/index/img-11.png" class="resumen" style="opacity: .7;">
              <h3>$25,000</h3>
              <p>SALDO PROM. MENSUAL</p>
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
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">      
          <div class="col-ss-12 col-xs-12 col-md-12 col-lg-12 sin-espacio">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs color-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#A" aria-controls="A" role="tab" data-toggle="tab">Movimientos</a>
                </li>
                <li role="presentation">
                  <a href="#B" aria-controls="B" role="tab" data-toggle="tab">Cargas de Gasolina</a>
                </li>             
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="A">
                  <!-- tablas -->
                  <div class="row">      
                    <div class="col-xs-12">
                      <div class="box no">         
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table id="example2" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>Fecha</th>
                                <th>Monto</th>
                                <th>Saldo promedio</th>                    
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                            <?php for ($i=0; $i <10 ; $i++) { ?>
                               <tr>
                                  <th>30/05/2017</th>
                                  <th>$25,000</th>
                                  <th>$100,000</th>
                              </tr>
                           <?php } ?>
                           <?php for ($x=0; $x <10 ; $x++) { ?>
                            <tr>
                              <th>20/07/2015</th>
                              <th>$55,000</th>
                              <th>$10,000</th>
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
                   <!-- fin tablas -->        
                </div>
                <div role="tabpanel" class="tab-pane" id="B">
                   <!-- tablas -->
                  <div class="row">      
                    <div class="col-xs-12">
                      <div class="box no">         
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table id="example3" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>Fecha</th>
                                <th>Monto</th>
                                <th>Tipo de combustible</th>
                                <th>Litros</th>
                                <th>Estación</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                            <?php for ($i=0; $i <3 ; $i++) { ?>
                               <tr>
                                <th>30/05/2017</th>
                                <th>$25,000</th>
                                <th>Magna</th>
                                <th>10 L</th>
                                <th>Memo ipsam dolor CDMX</th> 
                              </tr>
                           <?php } ?>

                           <?php for ($x=0; $x <3 ; $x++) { ?>
                            <tr>
                              <th>30/05/2017</th>
                                <th>$25,000</th>
                                <th>Premium</th>
                                <th>10 L</th>
                                <th>Memo ipsam dolor CDMX</th>  
                            </tr>
                           <?php } ?>
                           <?php for ($y=0; $y <3 ; $y++) { ?>
                            <tr>
                              <th>30/05/2017</th>
                                <th>$25,000</th>
                                <th>Diesel</th>
                                <th>10 L</th>
                                <th>Memo ipsam dolor CDMX</th>  
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
                   <!-- fin tablas -->
                </div>              
              </div>
            </div>
          <!-- /.box -->
          <!-- fin tablas -->
        </section>
        <!-- /.Left col -->       
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->

  <?php getFooter(); ?>