<?php
include('funtions.php');
getHeader();
getAside();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding"> 
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <h3 class="size-titulo">
                <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Tag <span class="mayor"> > </span> <span class="r">Resumen</span>
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
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">

          <!-- tablas -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box no">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                          <table id="example2" class="table table-hover">
                            <thead class="separacion">
                              <tr>
                                <th>ID</th>
                                  <th>TAG</th>
                                  <th>FECHA</th>
                                  <th>SALDO</th>
                              </tr>
                            </thead>
                            <tbody class="mytabs">
                           <!--  <?php //for ($i=0; $i <10 ; $i++) { ?>
                               <tr>
                                  <th>
                                  <a href="tag2.php">2910384561V</a></th>
                                  <th>
                                  <a href="tag2.php">Lorem ipsum Dolor</a>
                                  </th>
                                  <th>
                                  <a href="tag2.php">30/05/2017</a>
                                  </th>
                                  <th>
                                  <a href="tag2.php">$540,000</a>
                                  </th>
                                </tr>
                           <?php //} ?> -->
                           <?php for ($x=0; $x <10 ; $x++) { ?>
                            <tr>
                              <th><a href="tag2.php">2910384561V</a></th></th>
                              <th>ipsum Dolor</th>
                              <th>20/09/2017</th>
                              <th>$340,000</th>
                            </tr>
                           <?php } ?>
                            </tbody>
                          </table>
                        </div>
            <!-- /.box-header -->
           <!--  <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-hover">
                <thead class="separacion">
                  <tr>
                    <th>ID</th>
                    <th>TAG</th>
                    <th>FECHA</th>
                    <th>SALDO</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php //for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                    <th>
                    <a href="tag2.php">2910384561V</a></th>
                    <th>
                    <a href="tag2.php">Lorem ipsum Dolor</a>
                    </th>
                    <th>
                    <a href="tag2.php">30/05/2017</a>
                    </th>
                    <th>
                    <a href="tag2.php">$540,000</a>
                    </th>
                  </tr>
               <?php //} ?>

               <?php //for ($x=0; $x <10 ; $x++) { ?>
                <tr>
                  <th><a href="tag2.php">2356874561</a></th>
                  <th><a href="tag2.php">ipsum Dolor</a></th>
                  <th><a href="tag2.php">20/09/2017</a></th>
                  <th><a href="tag2.php">$340,000</a></th>
                </tr>
               <?php //} ?>

                </tbody>
              </table>
            </div> -->
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
