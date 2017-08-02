<?php
include('funtions.php');
getHeader();
getAside();

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h4 class="linea">
        <i class="fa fa-sort-asc rotar color-blue" aria-hidden="true"></i> <span class="usuario-size">USUARIOS</span> <span class="mayor-usuario"> > </span> <span class="r">Lorem Ipsum Dolor Sit S. A. de C.V.</span>
      </h4>
      <h4 class="id">
        Lorem Upsim Dolor
      </h4>
    </section>
    <!-- <section class="content-header ">
      <h1 class="linea">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Usuarios <span class="mayor"> > </span> <span class="r">Lorem Ipsum Dolor Sit S. A. de C.V.</span>
      </h1>

    </section> -->
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
            <img src="img/index/img-18.png" class="resumen" style="opacity: .7;">
              <h3>$150,000</h3>
              <p>SALDO PROMEDIO MENSUAL</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner morado">
            <img src="img/index/img-5.png" class="resumen" style="opacity: .7;">
              <h3>50</h3>
              <p>NÚMERO DE TAGS REGISTRADOS</p>
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
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <div class="col-ss-12 col-xs-12 col-md-12 col-lg-12 sin-espacio">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs color-tabs" role="tablist">
                <li role="presentation" class="active size-tags">
                  <a href="#A" aria-controls="A" role="tab" data-toggle="tab">Movimientos</a>
                </li>
                <li role="presentation" class="size-tags">
                  <a href="#B" aria-controls="B" role="tab" data-toggle="tab">Cargas de Gasolina</a>
                </li>
                <li role="presentation" class="size-tags">
                  <a href="#C" aria-controls="C" role="tab" data-toggle="tab">Facturación</a>
                </li>
                <li role="presentation" class="size-tags">
                  <a href="#D" aria-controls="D" role="tab" data-toggle="tab">Tag</a>
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
                          <table id="example5" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>Fecha</th>
                                <th>ID</th>
                                <th>Tag</th>
                                <th>Monto</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                            <?php for ($i=0; $i <10 ; $i++) { ?>
                               <tr>
                                  <th class="centers">30/05/2017</th>
                                  <th class="centers">291038402</th>
                                  <th class="centers">Lorem Ipsum Dolor</th>
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
                <div role="tabpanel" class="tab-pane" id="B">
                   <!-- tablas -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box no">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table id="example6" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>Fecha</th>
                                <th>ID</th>
                                <th>Tag</th>
                                <th>Monto</th>
                                <th>Combustible</th>
                                <th>Estación</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                            <?php for ($i=0; $i <4 ; $i++) { ?>
                              <tr>
                                <th class="centers">30/05/2017</th>
                                <th class="centers">291038402</th>
                                <th class="centers">Lorem Ipsum Dolor</th>
                                <th class="centers">$25,000</th>
                                <th class="centers">Magna</th>
                                <th class="centers">Nemo enim ipsam #32,5 Voluptatem CDMX</th>
                              </tr>
                           <?php } ?>

                           <?php for ($x=0; $x <4 ; $x++) { ?>
                              <tr>
                                <th class="centers">30/05/2017</th>
                                <th class="centers">291038402</th>
                                <th class="centers">Lorem Ipsum Dolor</th>
                                <th class="centers">$30,000</th>
                                <th class="centers">Disel</th>
                                <th class="centers">Nemo enim ipsam #32,5 Voluptatem CDMX</th>
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
                <div role="tabpanel" class="tab-pane" id="C">
                   <!-- tablas -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box no">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table id="example7" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>Razón Social</th>
                                <th>RFC</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Número Factura</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                            <?php for ($i=0; $i <4 ; $i++) { ?>
                               <tr>
                                 <th class="centers">Lorem Ipsum Dolor Sit S. A. de C.V.</th>
                                 <th class="centers">MOMD821206HR01</th>
                                 <th class="centers">$25,000</th>
                                 <th class="centers">30/09/2012</th>
                                 <th class="centers">8390210493829</th>
                              </tr>
                           <?php } ?>
                           <?php for ($i=0; $i <4 ; $i++) { ?>
                              <tr>
                                <th class="centers">Lorem Ipsum Dolor</th>
                                <th class="centers">MOMD821206HR01</th>
                                <th class="centers">$30,000</th>
                                <th class="centers">29/09/2012</th>
                                <th class="centers">8390210493829</th>
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
                <div role="tabpanel" class="tab-pane" id="D">
                   <!-- tablas -->
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box no">
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table id="example8" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>ID</th>
                                <th>Tag</th>
                                <th>Creación</th>
                                <th>Ultima Recarga</th>
                                <th>Monto</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                            <?php for ($i=0; $i <4 ; $i++) { ?>
                              <tr>
                                <th class="centers">30/06/2017</th>
                                <th class="centers">Lorem Ipsum Dolor</th>
                                <th class="centers">30/05/2017</th>
                                <th class="centers">30/05/2013</th>
                                <th class="centers">$25,000</th>
                              </tr>
                           <?php } ?>
                           <?php for ($x=0; $x <4 ; $x++) { ?>
                              <tr>
                                <th class="centers">29/05/2017</th>
                                <th class="centers">Lorem Ipsum Dolor</th>
                                <th class="centers">30/05/2017</th>
                                <th class="centers">30/05/2017</th>
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
