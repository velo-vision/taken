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
            <img src="img/index/img-7.png" class="resumen">
              <h3>16 17</h3>
              <p>PRECIO POR LITRO MAGNA</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner dos">
            <img src="img/index/img-7.png" class="resumen">
              <h3>20 - 21</h3>
              <p>PRECIO POR LITRO PREMIUM</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner tres">
            <img src="img/index/img-7.png" class="resumen">
              <h3>18 - 19</h3>
              <p>PRECIO POR LITRO DIESEL</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cuatro">
            <img src="img/index/img-5.png" class="resumen">
              <h3>80</h3>
              <p>CUENTAS ACTIVAS</p>
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
            <div class="inner dos">
            <img src="img/index/img-1.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>SALDO REQUERIDO MENSUAL</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner tres">
            <img src="img/index/img-11.png" class="resumen" style="opacity: .5;">
              <h3>$1,000,000</h3>
              <p>COSTO PROM. DE RECARGAS X USUARIO</p>
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
        <div class="col-lg-12">
          <div class="col-xs-12 col-sm-6 col-md-6 text-center borde-index">
            <h3 class="linea border-abajo">
              <i class="fa fa-sort-asc rotar color-azul1" aria-hidden="true"></i> Historico de consumo <span class="flotilla">x flotilla</span>
            </h3>
            <div id="area-chart" ></div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 text-center borde-index">
            <h3 class="linea border-abajo">
              <i class="fa fa-sort-asc rotar color-azul1" aria-hidden="true"></i> Balance <span class="flotilla">x flotilla</span> <span class="saldo-promedio">saldo promedio $3000</span>
            </h3>
            <div id="area2-chart" ></div>
          </div>
          </div>
          <section class="col-lg-12 connectedSortable">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <h3 class="size-titulo">
                <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Historial de Dispersiones
              </h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-2">
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
                    <th>ID de Tag</th>
                    <th>Nombre / Alias</th>
                    <th>Fecha de Traspaso</th>
                    <th>Monto de Traspaso</th>
                    <th>Saldo Total del Tag</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                  <th class="centers">2910384561258</th>
                  <th class="centers">Nemo en emouy</th>
                  <th class="centers">30/09/2017</th>
                  <th class="centers">25,000</th>
                  <th class="centers">$25,000</th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="col-xs-4 col-md-4 col-lg-5"></div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 centrado">
              <a href="#"><p class="botonActividad">VER TODA LA ACTIVIDAD</p></a>
            </div>
          <div class="col-xs-4 col-md-4 col-lg-5"></div>
        </div>
      </div>
      <!--fin primera tabla -->
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <h3 class="size-titulo">
              <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Historial de Recargas de Gasolina
            </h3>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-2">
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
        <!-- fint tiulo -->
        <!-- tablas -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example13" class="table table-hover">
                <thead>
                  <tr>
                    <th>ID de Tag</th>
                    <th>Nombre / Alias</th>
                    <th>Monto la carga</th>
                    <th>Cargas de gasolina</th>
                    <th>Fecha de la carga</th>
                    <th>Estación</th>
                    <th>Número de la transacción</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                 <tr>
                  <th class="centers">2910384561258</th>
                  <th class="centers">Nemo en emouy</th>
                  <th class="centers">$25,000</th>
                  <th class="centers">10 L</th>
                  <th class="centers">30/09/2012</th>
                  <th class="centers">Nemo enim ipsan #32,5  Voluptament CDMX</th>
                  <th class="centers">29103</th>
                 </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="col-xs-4 col-md-4 col-lg-5"></div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 centrado">
              <a href="#"><p class="botonActividad">VER TODA LA ACTIVIDAD</p></a>
            </div>
          <div class="col-xs-4 col-md-4 col-lg-5"></div>
        </div>
      </div>
      <!--fin segunda tabla -->
      <!-- mapa   -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <h3 class="size-titulo">
              <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Estaciones utilizadas
            </h3>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 form-group listas-fij absoluto">
              <div class="punto Azul"></div> <span>Estación disponible</span>
            </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 form-group listas-fij absoluto">
              <div class="punto Rojo"></div> <span>Cargando gasolina</span>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 form-group listas-fij absoluto">
              <div class="punto Verde"></div> <span>Recarga recientes</span>
            </div>
            </div>
        </div>
        <div id="mapahome" class="container-fluid restaurant-locator">
          </div>

      <!-- fin mapa -->
          <!-- /.box -->
          <!-- fin tablas -->
        </section>
        </div>
        <!-- /.Left col -->


      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php getFooter(); ?>
