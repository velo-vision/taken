<?php
include('funtions.php');
getHeader();
getAside();
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <h3 class="linea size-titulo">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Administrador de Tag / Parametros de control
      </h3>
      <div class="row">
        <div class="col-lg-3 col-xs-8 wow bounceInLeft" data-wow-delay=".2s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner dos">
            <img src="img/index/img-1.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>SALDO TOTAL ACTUAL</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 sin-padding">
            <!-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-lg-offset-1">
              <button class="button-vinculado"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="texto-res"> Agregar nuevo Tag</span></button>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
              <button class="button-vinculado2"><i class="fa fa-minus-square-o" aria-hidden="true"></i> <span class="texto-res"> Remover Tag</span></button>
            </div> -->
          </div>
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 sin-padding">
      		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2 form-group listas-fij">
		        <select class="form-control texto-res">
		          <option>FECHA</option>
		          <option>option 2</option>
		          <option>option 3</option>
		          <option>option 4</option>
		          <option>option 5</option>
		        </select>
		    </div>
      		<div class=" col-xs-6 col-sm-6 col-md-6 col-lg-4 form-group listas-fij">
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
      </div>
    </section>
    <section class="content">
      <!-- Main row -->
      <div class="row">

        <!-- Left col -->
        <section class="col-xs-12 col-md-12 col-lg-12 connectedSortable">
          <!-- tablas -->
        <div class="row">
          <div class="col-xs-12 scroll mCustomScrollbar" data-mcs-theme="dark">
            <div class="box no">
            <div class="box-body table-responsive no-padding">
              <table id="parametro" class="table table-hover">
                <thead class="separacion">
                  <tr>
                     <th><div class="checkbox checkbox-success" id="seleccionartodos">
                        <input id="checkTodos" type="checkbox">
                        <label for="checkTodos">ID de Tag</label>
                    </div>
                    </th>
                     <th>Nombre / Alias</th>
                     <th>Saldo Total</th>
                     <th>Monto</th>
                     <th>Litros</th>
                     <th>Dias</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
               <?php for ($x=1; $x <10 ; $x++) { ?>
                <tr>
                  <th class="centers">
                  	<div class="checkbox checkbox-success">
                        <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                        <label for="<?php echo $x; ?>">2910384561V</label>
                    </div>
                  </th>
                  <th class="centers">Adrian Rofriguez</th>
                  <th class="centers">$2000</th>
                  <th class="centers"><input type="text" name="" class="pad_diez"></th>
                  <th class="centers"><input type="text" name="" class="pad_diez"></th>
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
        <div class="col-xs-12 col-md-12 col-lg-12">
          <div class="col-xs-4 col-md-4 col-lg-5"></div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2 centrado">
              <a data-toggle="modal" data-target="#fijar_tope" data-whatever="@mdo">
                <p class="botonActividad"><i class="fa fa-sliders rotar" aria-hidden="true"></i> FIJAR TOPE</p>
              </a>
            </div>
          <div class="col-xs-4 col-md-4 col-lg-5"></div>
        </div>
         <!--MODAL programar-->
 <div class="modal fade" id="fijar_tope" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal_parametros col-xs-12 col-md-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="The Wedding Board">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 pad-monto menos-pad">
             <p class="text-programar centers">
               FIJAR TOPES EN LOS SIGUIENTES TAGS
             </p>
             <p class="text-monto centers">
               Escribe el monto
             </p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
            <input type="text" name="" class="tamaño-form">
           </div>
           <div class="col-xs-12 col-md-12 pad-monto menos-pad2">
             <p class="text-monto centers">
               Escribe los litros
             </p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
            <input type="text" name="" class="tamaño-form">
           </div>
           <div class="col-xs-12 col-md-12 pad-monto">
             <p class="text-monto centers">
               Selecciona los días que quieres fijar
             </p>
           </div>
           <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 centers">
            <!-- Date range -->
              <div class="form-group calendario_fechas">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="reservation">
                </div>
                <!-- /.input group -->
              </div>
           </div>
           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo mCustomScrollbar ocultar-flow" data-mcs-theme="dark">
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
                      <?php for ($x=0; $x <10 ; $x++) { ?>
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
          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
           <input type="text" name="passAdmin" class="pad_diez boton-parametro" placeholder="Contraseña Admin">
          </div>

          <div class="form-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
            <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
              <!-- <a data-toggle="modal" data-target="#tope_fijado" data-whatever="@mdo">
                <p class="botonActividad"><i class="fa fa-sliders rotar" aria-hidden="true"></i> FIJAR TOPE</p>
              </a> -->
              <a data-toggle="modal" data-target="#tope_fijado" data-whatever="@mdo">
                <button type="submit" class="btn-aceptar-cancelar btn-acep" data-dismiss="modal" aria-label="Close">Aceptar</button>
              </a>
            </div>
            <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
              <a data-toggle="modal" data-target="#" data-whatever="@mdo">
                <button type="button" class="btn-aceptar-cancelar btn_cancel" data-dismiss="modal" aria-label="Close">
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

 <!-- modal 2 -->
          <!--MODAL programar-->
 <div class="modal fade" id="tope_fijado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal-parametros-internos col-xs-12 col-md-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="The Wedding Board">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 pad-monto menos-pad">
             <p class="text-programar centers">
               SE FIJO EL TOPE CORRECTAMENTE
             </p>            
           </div>
           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo mCustomScrollbar ocultar-flow" data-mcs-theme="dark">
              <div class="box no">
                <div class="box-body table-responsive no-padding margin-transfer">
                  <table id="example5" class="table table-hover">
                    <thead class="separacion">
                      <tr>
                        <th class="pad-tabla no-border">ID de Tag</th>
                        <th class="pad-tabla no-border">Monto</th>
                        <th class="pad-tabla no-border">Litros</th>
                        <th class="pad-tabla no-border">Días</th>
                      </tr>
                    </thead>
                    <tbody class="mytabs">
                      <?php for ($x=0; $x <10 ; $x++) { ?>
                       <tr>
                         <th class="centers pad-tabla">2910384561V</th>
                         <th class="centers pad-tabla">Adrian Rofriguez</th>
                         <th class="centers pad-tabla">10</th>
                         <th class="centers pad-tabla">08/01/2017 - 08/17/2017</th>
                       </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->        

          <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-tag margin-traspaso centrado-btn">            
            <div class="col-xs-12 col-sm-12 margin-validar center-validar margin-10">
              <a data-toggle="modal" data-target="#" data-whatever="@mdo">
                <button type="button" class="btn-aceptar-cancelar btn-acep" data-dismiss="modal" aria-label="Close">
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
      </div>

        </section>
  </div>
  <!-- /.content-wrapper -->
<?php getFooter(); ?>
