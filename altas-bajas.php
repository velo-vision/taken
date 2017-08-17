<?php
include('funtions.php');
getHeader();
getAside();
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sin-padding">
        <div class="col-xs-12 col-sm-12 col-md-7">
          <h3 class="linea size-titulo">
            <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Altas y bajas
          </h3>
        </div>
      </div>
    </section>
    <section class="content size">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding center-tag">
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 sin-padding">
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
          <a data-toggle="modal" data-target="#bloquearr" data-whatever="@mdo">
            <button class="boton-alta"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> <span class="texto-res"> DAR DE ALTA</span></button>
          </a>
          <a data-toggle="modal" data-target="#reportar-tag" data-whatever="@mdo">
            <button class="alta-tag"><i class="fa fa-link" aria-hidden="true"></i> <span class="texto-res"> DESVINCULAR TAG</span></button>
          </a>
	    </div>
      </div>
    </section>
    <section class="content">
   <!-- Main row -->
   <div class="row">
     <!-- Left col -->
     <section class="col-lg-12 connectedSortable">
       <div class="col-ss-12 col-xs-12 col-md-12 col-lg-12 sin-espacio">
           <!-- Nav tabs -->
           <ul class="nav nav-tabs nav-tanken color-tabs" role="tablist">
             <li role="presentation" class="active size-tags">
               <a href="#A" aria-controls="A" role="tab" data-toggle="tab">Usuarios</a>
             </li>
             <li role="presentation" class="size-tags">
               <a href="#B" aria-controls="B" role="tab" data-toggle="tab">Tag</a>
             </li>
             <li role="presentation" class="size-tags">
               <a href="#C" aria-controls="C" role="tab" data-toggle="tab">Gasolineras</a>
             </li>
             <li role="presentation" class="size-tags">
               <a href="#D" aria-controls="D" role="tab" data-toggle="tab">Terminales</a>
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
                     <div class="box-body table-responsive no-padding margin-transfer">
                       <table id="example14" class="table table-hover">
                         <thead class="separacion">
                           <tr>
                              <th>
                                <div class="checkbox checkbox-success" id="seleccionartodos">
                                   <input id="checkTodos" type="checkbox">
                                   <label for="checkTodos" style="font-weight: 600;">Nombre de empresa</label>
                                </div>
                              </th>
                              <th>Tags Vinculados</th>
                              <th>Saldo Total</th>
                              <th>Ultimo abono</th>
                              <th>Ultima actividad <br> de la cuenta</th>
                              <th></th>
                           </tr>
                         </thead>
                         <tbody class="mytabs">
                        <?php for ($x=1; $x <5 ; $x++) { ?>
                         <tr>
                           <th class="centers">
                           	<div class="checkbox checkbox-success">
                                 <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                                 <label for="<?php echo $x; ?>">Lorem ipsum Dolor</label>
                             </div>
                           </th>
                           <th class="centers">50</th>
                           <th class="centers">$25,000</th>
                           <th class="centers">$70,000</th>
                           <th class="centers">08/09/2017</th>
                           <th class="centers"><a data-toggle="modal" data-target="#bloquear" data-whatever="@mdo"><p class="altas-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> Bloquear</p></a></th>
                         </tr>
                        <?php } ?>
                         </tbody>
                         <tbody class="mytabs">
                        <?php for ($x=1; $x <5 ; $x++) { ?>
                         <tr>
                           <th class="centers">
                           	<div class="checkbox checkbox-success">
                                 <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                                 <label for="<?php echo $x; ?>">Lorem ipsum Dolor</label>
                             </div>
                           </th>
                           <th class="centers">70</th>
                           <th class="centers">$15,000</th>
                           <th class="centers">$30,000</th>
                           <th class="centers">03/09/2017</th>
                           <th class="centers"><a data-toggle="modal" data-target="#bloquear" data-whatever="@mdo"><p class="altas-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> Bloquear</p></a></th>
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
                     <div class="box-body table-responsive no-padding margin-transfer">
                       <table id="example15" class="table table-hover">
                         <thead class="separacion">
                           <tr>
                              <th>
                                <div class="checkbox checkbox-success" id="seleccionartodos">
                                   <input id="checkTodos" type="checkbox">
                                   <label for="checkTodos" style="font-weight: 600;">Tag</label>
                                </div>
                              </th>
                              <th>Nombre o alias Vinculados</th>
                              <th>Vehiculo</th>
                              <th>Saldo Total</th>
                              <th>Ultimo abono</th>
                              <th></th>
                           </tr>
                         </thead>
                         <tbody class="mytabs">
                        <?php for ($x=1; $x <10 ; $x++) { ?>
                         <tr>
                           <th class="centers">
                           	<div class="checkbox checkbox-success">
                                 <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                                 <label for="<?php echo $x; ?>">123-KV</label>
                             </div>
                           </th>
                           <th class="centers">Lorem ipsum Dolor</th>
                           <th class="centers">Chevrolet Sonic LTZ</th>
                           <th class="centers">$25,000</th>
                           <th class="centers">$70,000</th>
                           <th class="centers"><a data-toggle="modal" data-target="#bloquear" data-whatever="@mdo"><p class="altas-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> Bloquear</p></a></th>
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
                     <div class="box-body table-responsive no-padding margin-transfer">
                       <table id="example16" class="table table-hover">
                         <thead class="separacion">
                           <tr>
                              <th>
                                <div class="checkbox checkbox-success" id="seleccionartodos">
                                   <input id="checkTodos" type="checkbox">
                                   <label for="checkTodos" style="font-weight: 600;">Grupo Gasolinero</label>
                                </div>
                              </th>
                              <th>ID Gasolinera</th>
                              <th>Recargas Totales</th>
                              <th>Total de litros comprados</th>
                              <th>Precio por litro</th>
                              <th>Tipo de Gasolina</th>
                              <th></th>
                           </tr>
                         </thead>
                         <tbody class="mytabs">
                        <?php for ($x=1; $x <10 ; $x++) { ?>
                         <tr>
                           <th class="centers">
                           	<div class="checkbox checkbox-success">
                                 <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                                 <label for="<?php echo $x; ?>">Hidrosina</label>
                             </div>
                           </th>
                           <th class="centers">Hidrosina-1234</th>
                           <th class="centers">300</th>
                           <th class="centers">3000</th>
                           <th class="centers">17 / 16</th>
                           <th class="centers">PREMIUN / MAGNA</th>
                           <th class="centers"><a data-toggle="modal" data-target="#bloquear" data-whatever="@mdo"><p class="altas-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> Bloquear</p></a></th>
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
                     <div class="box-body table-responsive no-padding margin-transfer">
                       <table id="example17" class="table table-hover">
                         <thead class="separacion">
                           <tr>
                              <th>
                                <div class="checkbox checkbox-success" id="seleccionartodos">
                                   <input id="checkTodos" type="checkbox">
                                   <label for="checkTodos" style="font-weight: 600;">ID Gasolinera</label>
                                </div>
                              </th>
                              <th>Gasolinera</th>
                              <th>UIID</th>
                              <th>Costo de renta</th>
                              <th>Estatus</th>
                              <th>Monto Promedio Mensual</th>
                              <th></th>
                           </tr>
                         </thead>
                         <tbody class="mytabs">
                        <?php for ($x=1; $x <10 ; $x++) { ?>
                         <tr>
                           <th class="centers">
                           	<div class="checkbox checkbox-success">
                                 <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                                 <label for="<?php echo $x; ?>">Hidrosina-1234</label>
                             </div>
                           </th>
                           <th class="centers">Hidrosina</th>
                           <th class="centers">a26ab725-1152</th>
                           <th class="centers">100</th>
                           <th class="centers">Activa</th>
                           <th class="centers">$100,000</th>
                           <th class="centers"><a data-toggle="modal" data-target="#bloquear" data-whatever="@mdo"><p class="altas-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> Bloquear</p></a></th>
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
 <!--MODAL bloquear-->
<div class="modal fade" id="bloquear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div>
      <form role="form">
      <div class="alta-bloquear col-md-12">
        <div>
          <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
            <img src="img/modal/cerrar1.png" alt="The Wedding Board">
          </button>
        </div>
        <!--COLLAPSER-->
          <div class="col-md-12 pad-monto padding-bloquear">
            <p class="text-programar centers">
              Deseas bloquear temporalmente al siguiente usuario
            </p>
          </div>
          <div class="col-md-12 pad-monto nopadding espacio-bloquear text-bloquear">
            <div class="col-md-4 centers nopadding border-bloquear">
              <p>Tag Vinculados</p>
              <span>30</span>
            </div>
            <div class="col-md-4 centers nopadding border-bloquear">
              <p>Saldo Total</p>
              <span>$25,000</span>
            </div>
            <div class="col-md-4 centers nopadding">
              <p>Ultimo abono</p>
              <span>$70,000</span>
            </div>
          </div>
         <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
          <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
         </div>
         <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
           <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
             <a data-toggle="modal" data-target="#bloqueado" data-whatever="@mdo">
               <button type="submit" class="btn-aceptar-cancelar btn-primary-aceptar" data-dismiss="modal" aria-label="Close">Aceptar</button>
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
<!--MODAL bloqueado-->
<div class="modal fade" id="bloqueado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="alta-bloqueado col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto padding-bloquear">
           <div class="col-xs-12 col-md-12 centers img-candado">
             <img src="img/candado.png" class="size-candado" alt="">
           </div>
           <p class="text-programar centers">
             El siguiente usuario se bloqueo exitosamente
           </p>
           <p class="centers">
             Lorem Ipsum Dolor Sit S, A, de C.V.
           </p>
         </div>
         <div class="col-md-12 pad-monto nopadding margin-bloquear">
           <div class="col-md-4 centers nopadding border-bloquear">
             <p style="font-weight:600;">Tag Vinculados</p>
             <p>30</p>
           </div>
           <div class="col-md-4 centers nopadding border-bloquear">
             <p style="font-weight:600;">Saldo Total</p>
             <p>$25,000</p>
           </div>
           <div class="col-md-4 centers nopadding">
             <p style="font-weight:600;">Ultimo abono</p>
             <p>$70,000</p>
           </div>
         </div>
        <div class="form-group col-sm-12 col-md-12 col-lg-12 padding-tag margin-traspaso">
          <div class="col-xs-12 col-sm-12 col-md-12 margin-validar center-validar margin-10 centers">
            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
              <button type="button" class="btn-aceptar-cancelar btn-primary-cancelar" data-dismiss="modal" aria-label="Close">
                Cerrar
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
  <!-- /.content-wrapper -->
<?php getFooter(); ?>
