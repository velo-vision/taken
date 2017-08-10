<?php
include('funtions.php');
getHeader();
getAside();

?>
<!-- menu activo -->
<style>
#ntres a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.ntres i{
  color: #fff !important;
}
</style>

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
            <img src="img/index/img-11.png" class="resumen" style="opacity: .7;">
              <h3>$1,000,000</h3>
              <p>SALDO PROMEDIO MENSUAL</p>
            </div>
          </div>
        </div>
      <!-- /.row -->
      <div class="col-lg-6 col-sm-12 col-xs-12">
        <!-- small box -->
        <a href="#">
          <div class="box-balance bg-aqua">
            <div class="inner bg-transferencia">
              <p class="nomargin"><i class="fa fa-transgender-alt" aria-hidden="true"></i> Realizar Transferencia</p>
            </div>
          </div>
        </a>
      </div>
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
          <div class="col-ss-12 col-xs-12 col-md-12 col-lg-12 espacio">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs color-tabs" role="tablist">
                <li role="presentation" class="active">
                  <a href="#A" aria-controls="A" role="tab" data-toggle="tab">Abono a cuenta</a>
                </li>
                <li role="presentation">
                  <a href="#B" aria-controls="B" role="tab" data-toggle="tab">Dispersión de Saldo</a>
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
                          <table id="example9" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>Monto Abonado</th>
                                <th>Fecha Último Abono</th>
                                <th>Número de Transaccíon</th>
                                <th>Saldo Total</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs1">
                            <?php for ($i=0; $i <5 ; $i++) { ?>
                               <tr>
                                  <th class="centers">$5,000</th>
                                  <th class="centers">30/09/2012</th>
                                  <th class="centers">291038402</th>
                                  <th class="centers">$25,000</th>
                              </tr>
                           <?php } ?>
                           <?php for ($x=0; $x <5 ; $x++) { ?>
                            <tr>
                              <th class="centers">$15,000</th>
                              <th class="centers">28/09/2012</th>
                              <th class="centers">291038402</th>
                              <th class="centers">$30,000</th>
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
                          <table id="example10" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>ID de tag</th>
                                <th>Nombre / Alias</th>
                                <th>Fecha de Traspaso</th>
                                <th>Monto de Traspado</th>
                                <th>Saldo Total del Tag</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs centers">
                            <?php for ($i=0; $i <4 ; $i++) { ?>
                               <tr>
                                <th class="centers">291038402</th>
                                <th class="centers">Nemo enim ipsam</th>
                                <th class="centers">30/05/2017</th>
                                <th class="centers">$25,000</th>
                                <th class="centers">$25,000</th>
                              </tr>
                           <?php } ?>

                           <?php for ($x=0; $x <4 ; $x++) { ?>
                            <tr>
                              <th class="centers">291038402</th>
                              <th class="centers">Nemo enim ipsam</th>
                              <th class="centers">29/05/2017</th>
                              <th class="centers">$30,000</th>
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
                  </div>
                   <!-- fin tablas -->
                </div>
              </div>
            </div>
          <!-- /.box -->
          <!-- fin tablas -->
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
        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->

    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->

  <?php getFooter(); ?>
