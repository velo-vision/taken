<?php
include('funtions.php');
getHeader();
getAside();

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h3 class="linea">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Detalle de Historial de Cargas <span class="mayor">
      </h3>
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
            <img src="img/index/img-11.png" class="resumen" style="opacity: .7;">
              <h3>$1,000,000</h3>
              <p>SALDO PROMEDIO MENSUAL</p>
            </div>
          </div>
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
          <div class="col-xs-12">
            <div class="box no">
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding border-espacio">
                <table id="example11" class="table table-hover">
                  <thead class="separacion">
                    <tr>
                      <th>ID de tag</th>
                      <th>Nombre / Alias</th>
                      <th>Monto de Carga</th>
                      <th>Cargas de Gasolina</th>
                      <th>Fecha de la Carga</th>
                      <th>Estación</th>
                      <th>Número de la transacción</th>
                    </tr>
                  </thead>
                  <tbody class="mytabs">
                  <?php for ($i=0; $i <5 ; $i++) { ?>
                    <tr class="hover-registro" onCLick="document.location='usuario2.php'">
                      <td class="centers text-color">291038402</td>
                      <td class="centers">Lorem Ipsum Dolor</td>
                      <td class="centers"><span>$25,000</span></td>
                      <td class="centers"><span>10 L</span></td>
                      <td class="centers"><span>30/09/2012</span></td>
                      <td class="centers"><span>Nemo enim ipsam #32,5 Voluptatem CDMX</span></td>
                      <td class="centers text-color"><span>29103</span></td>
                    </tr>
                  <?php } ?>
                  <?php for ($x=0; $x <5 ; $x++) { ?>
                    <tr class="hover-registro" onCLick="document.location='usuario2.php'">
                      <td class="centers text-color"><span>291038402</span></td>
                      <td class="centers"><span>Lorem Ipsum Dolor</span></td>
                      <td class="centers"><span>$25,000</span></td>
                      <td class="centers"><span>10 L</span></td>
                      <td class="centers"><span>30/09/2012</span></td>
                      <td class="centers"><span>Nemo enim ipsam #32,5 Voluptatem CDMX</span></td>
                      <td class="centers text-color"><span>29103</span></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <div class="col-md-12 col-xs-12">
            PERIODO
            <div class="form-group select-tanken tag2">
              <select class="form-control">
                <option>30/09/2012 | 30/10/2012</option>r
                <option>option 2</option>
                <option>option 3</option>
                <option>option 4</option>
                <option>option 5</option>
              </select>
            </div>
            <div class="form-group select-tanken tag2">
              <select class="form-control">
                <option>Mapa de estaciones actuales</option>
                <option>Mapa de mayor cargas</option>
              </select>
            </div>
          </div>
          <!-- mapa -->
          <div class="col-md-12" style="margin-top:10px;">
            <div id="map" class="container-fluid restaurant-locator">
          </div>
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->

  <?php getFooter(); ?>
