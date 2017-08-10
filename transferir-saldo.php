<?php
include('funtions.php');
getHeader();
getAside();
?>
<style>
#ncuatro_doble a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.ncuatro_doble i{
  color: #fff !important;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <h3 class="linea size-titulo">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Transferir Saldo
      </h3>
    </section>
    <section class="content size margin-select">
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
    <section class="content">
      <!-- Main row -->
      <div class="row">

        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- tablas -->
        <div class="row">
          <div class="col-xs-12 scroll">
            <div class="box no">
            <div class="box-body table-responsive no-padding margin-transfer">
              <table id="example5" class="table table-hover">
                <thead class="separacion">
                  <tr>
                     <th><div class="checkbox checkbox-success" id="seleccionartodos">
                        <input id="checkTodos" type="checkbox">
                        <label for="checkTodos">ID de Tag</label>
                    </div>
                    </th>
                     <th>Nombre / Alias</th>
                     <th>Saldo Total</th>
                     <th>Fecha de Último Traspaso</th>
                     <th>Monto</th>
                     <th>Asignar Fecha</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
               <?php for ($x=1; $x <20 ; $x++) { ?>
                <tr>
                  <th class="centers">
                  	<div class="checkbox checkbox-success">
                        <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                        <label for="<?php echo $x; ?>">2910384561V</label>
                    </div>
                  </th>
                  <th class="centers">Adrian Rofriguez</th>
                  <th class="centers">$656</th>
                  <th class="centers">30/09/2012</th>
                  <th class="centers"><input type="text" name="" value=""></th>
                  <th class="centers"><input type="date" name="" value=""></th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-header -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
          <!-- /.box -->
          <!-- fin tablas -->
        </section>
        <div class="col-md-12 margin-transfer">
          <div class="col-xs-12 col-sm-12 col-md-6 margin-validar center-validar saldo-right">
            <a data-toggle="modal" data-target="#realizar-traspaso-tag" data-whatever="@mdo">
              <button type="submit" class="btn-tag btn-saldo"><i class="fa fa-retweet" aria-hidden="true"></i> Realizar Traspaso</button>
            </a>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 margin-validar center-validar saldo-right1">
            <a data-toggle="modal" data-target="#programar-traspaso" data-whatever="@mdo">
              <button type="submit" class="btn-tag btn-programa"><i class="fa fa-calendar" aria-hidden="true"></i> Programar Traspaso</button>
            </a>
          </div>
        </div>
      </div>
  </section>
  <!-- /.content-wrapper -->
  <!--MODAL programar-->
 <div class="modal fade" id="programar-traspaso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal-programar col-md-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="The Wedding Board">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-md-12 pad-monto">
             <p class="text-programar centers">
               Escribe el monto que deseas traspasar a los siguientes tag
             </p>
             <p class="text-monto centers">
               Escribe el monto
             </p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
            <input type="text" name="" class="tamaño-form">
           </div>
           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo">
              <div class="box no">
                <div class="box-body table-responsive no-padding margin-transfer">
                  <table id="example5" class="table table-hover">
                    <thead class="separacion">
                      <tr>
                        <th class="pad-tabla no-border">ID de Tag</th>
                        <th class="pad-tabla no-border">Nombre Alias</th>
                      </tr>
                    </thead>
                    <tbody class="mytabs">
                      <?php for ($x=1; $x <20 ; $x++) { ?>
                       <tr>
                         <th class="centers pad-tabla">2910384561V</th>
                         <th class="centers pad-tabla">Adrian Rofriguez</th>
                       </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->
          <div class="col-md-6 col-md-offset-3 nopadding margin-traspaso">
            <p class="text-monto">
              Programar Traspaso
            </p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
           <input type="date" name="" class="tamaño-form">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
           <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
          </div>
          <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
            <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
              <a data-toggle="modal" data-target="#realizar-traspaso" data-whatever="@mdo">
                <button type="submit" class="btn-aceptar-cancelar btn-primary-aceptar">Aceptar</button>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
              <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                <!-- <button type="submit" class="btn-aceptar-cancelar btn-primary-cancelar">Cancelar</button> -->
                <button type="button" class="btn-aceptar-cancelar btn-primary-cancelar" data-dismiss="modal" aria-label="Close">
                  Cancelar
                </button>
              </a>
            </div>
          </div>
         <!--COLLAPSER-->
       </div>
       </form>
     </div>
   </div>
 </div>
 <!--MODAL-->
 <!--MODAL realizada-->
 <div class="modal fade" id="realizar-traspaso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal-realizar col-md-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="The Wedding Board">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-md-12 pad-monto">
             <p class="text-programar centers">
               El traspaso de concretara a los siguientes tag el dia
             </p>
             <p class="text-fecha centers">
               08/08/2017
             </p>
           </div>
           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo">
              <div class="box no">
                <div class="box-body table-responsive no-padding margin-transfer">
                  <table id="example5" class="table table-hover">
                    <thead class="separacion">
                      <tr>
                        <th class="pad-tabla no-border">ID de Tag</th>
                        <th class="pad-tabla no-border">Nombre Alias</th>
                      </tr>
                    </thead>
                    <tbody class="mytabs">
                      <?php for ($x=1; $x <20 ; $x++) { ?>
                       <tr>
                         <th class="centers pad-tabla">2910384561V</th>
                         <th class="centers pad-tabla">Adrian Rofriguez</th>
                       </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->
         <!--COLLAPSER-->
       </div>
       </form>
     </div>
   </div>
 </div>
<!--MODAL-->
<!--MODAL realizar traspaso tag-->
<div class="modal fade" id="realizar-traspaso-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-traspaso-tag col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto">
           <p class="text-realizar-tag centers">
             Acontinuación se harán los siguientes traspasos a las tag seleccionadas
           </p>
         </div>
         <!-- tabla -->
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo">
            <div class="box no">
              <div class="box-body table-responsive no-padding margin-transfer">
                <table id="example5" class="table table-hover">
                  <thead class="separacion">
                    <tr>
                      <th class="pad-tabla no-border">ID de Tag</th>
                      <th class="pad-tabla no-border">Nombre Alias</th>
                      <th class="pad-tabla no-border">Monto</th>
                    </tr>
                  </thead>
                  <tbody class="mytabs">
                    <?php for ($x=1; $x <20 ; $x++) { ?>
                     <tr>
                       <th class="centers pad-tabla">2910384561V</th>
                       <th class="centers pad-tabla">Adrian Rofriguez</th>
                       <th class="centers pad-tabla">$2000</th>
                     </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- fin tabla -->
        <div class="col-md-6 col-md-offset-3 nopadding margin-traspaso">
          <p class="text-monto">
            Programar Traspaso
          </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
         <input type="date" name="" class="tamaño-form">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
         <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
        </div>
        <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#realizar-traspaso-realizado" data-whatever="@mdo">
              <button type="submit" class="btn-aceptar-cancelar btn-primary-aceptar">Aceptar</button>
            </a>
          </div>
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#" data-whatever="@mdo">
              <button type="button" class="btn-aceptar-cancelar btn-primary-cancelar" data-dismiss="modal" aria-label="Close">
                Cancelar
              </button>
            </a>
          </div>
        </div>
       <!--COLLAPSER-->
     </div>
     </form>
   </div>
 </div>
</div>
<!--MODAL-->
<!--MODAL realizar traspaso tag-->
<div class="modal fade" id="realizar-traspaso-realizado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-traspaso-realizado col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto">
           <p class="text-realizar-tag centers">
             se han realizado correctamente los siguientes traspasos
           </p>
         </div>
         <!-- tabla -->
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo">
            <div class="box no">
              <div class="box-body table-responsive no-padding margin-transfer">
                <table id="example5" class="table table-hover">
                  <thead class="separacion">
                    <tr>
                      <th class="pad-tabla no-border">ID de Tag</th>
                      <th class="pad-tabla no-border">Nombre Alias</th>
                      <th class="pad-tabla no-border">Monto</th>
                    </tr>
                  </thead>
                  <tbody class="mytabs">
                    <?php for ($x=1; $x <20 ; $x++) { ?>
                     <tr>
                       <th class="centers pad-tabla">2910384561V</th>
                       <th class="centers pad-tabla">Adrian Rofriguez</th>
                       <th class="centers pad-tabla">$2000</th>
                     </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- fin tabla -->
       <!--COLLAPSER-->
     </div>
     </form>
   </div>
 </div>
</div>
<!--MODAL-->

<?php getFooter(); ?>
