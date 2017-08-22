<?php
include('funtions.php');
getHeader();
getAside();

?>
<!-- menu activo -->
<style>
#ncatorceDos a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.ncatorceDos i{
  color: #fff !important;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h1 class="linea">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Promociones / Crear Promoción<span class="mayor"> </span>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content size">
      <!-- Small boxes (Stat box) -->
    </section>

        <!-- /.Left col -->
       <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="promociones col-xs-12 col-sm-12 col-md-12" >
          <div class="col-xs-6 col-sm-6 col-md-3  col-lg-2 padding-no">
            <button class="tablinks2 perfil-n" onclick="promociones(event, 'CrearPromo')" id="default">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i> CREAR PROMOCIÓN
            </button>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3  padding-no">
            <button class="tablinks2 perfil-n" onclick="promociones(event, 'AsignarPromo')">
              <i class="fa fa-users" aria-hidden="true"></i> ASIGNAR PROMOCIÓN
            </button>
          </div>
        </div>
        <section >
           <div id="CrearPromo" class="tabcontent">
           <!-- CONTENIDO -->
              <div class="row formatoPromocion">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <p class="titulo">CREAR PROMOCIÓN</p>
                </div>
                <form  >
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-no">
                      <p>Nombre de la promoción</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 ">
                      <input type="text" name="nom_promo" placeholder="Tanken aniversario">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Vigencia del</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <div class="col-xs-12 col-sm-12 col-md-5 padding-no">
                        <input type="date" name="" value="">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-2">
                        <p id="centrado">hasta</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5 padding-no">
                        <input type="date" name="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 padding-no">
                      <p id="vigencia">Número de usos totales</p>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-6 col-lg-4">
                      <input type="number" name="numTotal" placeholder="2">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 ">
                      <p id="vigencia">Número de usos por usuario</p>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-6 col-lg-4">
                      <input type="number" name="numUser" placeholder="2">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Aplica un Código de Cupón</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <input type="text" name="cupon" placeholder="GASTAG-1133">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Acciones</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <select>
                        <option value="descuento">Descuento</option>
                        <option value="descuento">Descuento</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Valor de la acción</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <input type="text" name="valorAccion" placeholder="10% Descuento acumulativo">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Condiciones</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <select>
                        <option value="Saldo">Saldo promedio</option>
                        <option value="Saldo">Saldo promedio</option>
                        <option value="Saldo">Saldo promedio</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Valor de la condición</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <input type="text" name="valorCondicion" placeholder="$50000">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Adjuntar una imagen</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                          <div class="file-select-name" id="noFile"><span>subir imagén en formato .jpg, .png o gif no mayor a 2mb.</span></div>
                          <input type="file" name="chooseFile" id="chooseFile">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Descripción</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                      <textarea placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa."></textarea>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5">
                      <a href="#">
                        <p class="botonActividad">SEGMENTAR PROMOCIÓN</p>
                      </a>
                    </div>
                  </div>
                </form>
              </div>
               <!-- fin CONTENIDO -->
           </div>
           <div id="AsignarPromo" class="tabcontent">
             <!-- CONTENIDO -->
              <div class="row formatoPromocion">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <p class="titulo">SEGMENTACIÓN</p>
                </div>
                <form  >
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-no">
                      <p>Estados de México</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <select>
                        <option value="estado1">Estado de México</option>
                        <option value="estado2">Estado de Puebla</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Dias de la semana</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-no">
                        <input type="date" name="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 ">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 padding-no">
                      <p>Horarios</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <input type="text" name="numTotal" placeholder="9:00 am a 10:00 pm">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                      <p>Tipos de Gasolina</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <select>
                        <option value="descuento">Premium</option>
                        <option value="descuento">Magna</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p id="centrado-aqui">Usuarios únicos</p>
                    </div>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-6 col-lg-4 centers">
                      <a data-toggle="modal" data-target="#Usuario_unico" data-whatever="@mdo">
                        <p class="btn-asigacion1 automatico cent"><span id="usuario_U"><i class="fa fa-file-text-o" aria-hidden="true"></i>  SELECCIONAR</span></p>
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 margin-5">
                      <p id="centrado-aqui">Gasolineras participantes</p>
                    </div>
                    <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-0 col-md-6 col-lg-4 centers">
                      <a data-toggle="modal" data-target="#Gasolinera_unico" data-whatever="@mdo">
                        <p class="btn-asigacion1 automatico cent"><span id="gasolinera"><i class="fa fa-file-text-o" aria-hidden="true"></i> SELECCIONAR</span></p>
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-8 col-xs-offset-2 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5">
                      <a data-toggle="modal" data-target="#terminar_promocion" data-whatever="@mdo">
                        <p class="botonActividad completo quieto-boton"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> CONCLUIR PROMOCIÓN</p>
                      </a>
                    </div>
                  </div>
                </form>
              </div>
               <!-- fin CONTENIDO -->
           </div>
          <!-- /.box -->
         <!-- modals        -->

                   <!--MODAL programar-->
 <div class="modal fade" id="Usuario_unico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal_parametros_promocion col-xs-12 col-md-12 col-lg-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 pad-monto menos-pad">
             <p class="text-programar centers padding-seleccionar">
              SELECCIONAR LOS USUARIOS QUE DESEAS ASIGNAR A LA PROMOCIÓN
             </p>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
            <input type="text" name="" class="tamaño-form3" placeholder=" BUSCAR..">
           </div>
           <div class="col-xs-12 col-md-12 pad-monto menos-pad2 margin-aumento">
            <div class="col-md-6 col-lg-4 col-lg-offset-2">
              <select class="border-azul">
                <option value="descuento">FECHA</option>
                <option value="descuento">FECHAS</option>
              </select>
            </div>
            <div class="col-md-6 col-lg-4">
              <select class="border-azul">
                <option value="saldo">SALDO TOTAL</option>
                <option value="saldo">SALDO TOTAL</option>
              </select>
            </div>
           </div>
           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 scroll-saldo mCustomScrollbar ocultar-flow pad-promo" data-mcs-theme="dark">
              <div class="box no">
                 <div class="box-body table-responsive no-padding margin-transfer">
              <table id="example5" class="table table-hover">
                <thead class="separacion">
                  <tr>
                     <th>
                       <div class="checkbox checkbox-success" id="seleccionartodos">
                        <input id="checkTodos" type="checkbox">
                        <label for="checkTodos">Nombre De La Empresa</label>
                        </div>
                    </th>
                     <th>Última Recarga</th>
                     <th>Saldo Total</th>
                     <th>Tags Activas</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
               <?php for ($x=1; $x <20 ; $x++) { ?>
                <tr>
                  <th class="centers">
                    <div class="checkbox checkbox-success">
                        <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                        <label for="<?php echo $x; ?>">Sambum S.a de C.V</label>
                    </div>
                  </th>
                  <th class="centers">30/09/2017</th>
                  <th class="centers">$10,000</th>
                  <th class="centers">1</th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->
          <div class="form-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
            <div class="col-xs-6 col-sm-5 margin-validar center-validar margin-10 rights">
              <a data-toggle="modal" data-target="#select_user" data-whatever="@mdo">
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
 <div class="modal fade" id="select_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal_parametros_promocion2 col-xs-12 col-md-12 col-lg-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 pad-monto menos-pad">
             <p class="text-programar centers">
              SE ASIGNARON LO SIGUIENTES USUARIOS  PARA LA PROMOCIÓN
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
                     <th class="centers no-border">Nombre De La Empresa
                    </th>
                  </tr>
                </thead>
                <tbody class="mytabs">
               <?php for ($x=0; $x <5 ; $x++) { ?>
                <tr>
                  <th class="centers">
                    Sambum S.a de C.V
                  </th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->
          <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-tag margin-traspaso sinmargin_lef">
            <div class="col-xs-12 col-sm-12 col-lg-12 margin-validar center-validar margin-10 centrado_btn_modal centers">
              <a data-toggle="modal" data-target="#" data-whatever="@mdo">
                <button type="button" class="btn-aceptar-cancelar btn_cancel" data-dismiss="modal" aria-label="Close" onclick="cambioTExt()">
                  CERRAR
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
 <!-- fin modal 2 -->
<!-- modal 3 -->
                   <!--MODAL programar-->
 <div class="modal fade" id="Gasolinera_unico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal_parametros_promocion col-xs-12 col-md-12 col-lg-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="">
           </button>
         </div>
         <!--COLLAPSER-->
         <div class="col-xs-12 col-md-12 pad-monto menos-pad">
           <p class="text-programar centers padding-seleccionar">
            SELECCIONAR LAS GASOLINERAS QUE DESEAS ASIGNAR LA PROMOCIÓN
           </p>
         </div>
         <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
          <input type="text" name="" class="tamaño-form3" placeholder=" BUSCAR..">
         </div>
         <div class="col-xs-12 col-md-12 pad-monto menos-pad2 margin-aumento">
          <div class="col-md-6 col-lg-4 col-lg-offset-2">
            <select class="border-azul">
              <option value="descuento">FECHA</option>
              <option value="descuento">FECHAS</option>
            </select>
          </div>
          <div class="col-md-6 col-lg-4">
            <select class="border-azul">
              <option value="saldo">SALDO TOTAL</option>
              <option value="saldo">SALDO TOTAL</option>
            </select>
          </div>
         </div>
           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo mCustomScrollbar ocultar-flow" data-mcs-theme="dark">
              <div class="box no">
                 <div class="box-body table-responsive no-padding margin-transfer">
              <table id="example18" class="table table-hover">
                <thead class="separacion">
                  <tr>
                     <th><div class="checkbox checkbox-success" id="seleccionartodos">
                        <input id="checkTodos" type="checkbox">
                        <label for="checkTodos">ID de la Gasolinera</label>
                    </div>
                    </th>
                     <th>Fecha</th>
                     <th>Monto Promedio</th>
                     <th>Litros Vendidos</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
               <?php for ($x=1; $x <20 ; $x++) { ?>
                <tr>
                  <th class="centers">
                    <div class="checkbox checkbox-success">
                        <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                        <label for="<?php echo $x; ?>">Hidrosina-1234</label>
                    </div>
                  </th>
                  <th class="centers">30/09/2017</th>
                  <th class="centers">$10,000</th>
                  <th class="centers">3000</th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->
          <div class="form-group col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
            <div class="col-xs-6 col-sm-5 margin-validar center-validar margin-10 rights">
              <a data-toggle="modal" data-target="#select_gasolinera" data-whatever="@mdo">
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

<!-- fon modal 3 -->

<!-- modal 4 -->
<!--MODAL programar-->
 <div class="modal fade" id="select_gasolinera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal_parametros_promocion2 col-xs-12 col-md-12 col-lg-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 pad-monto menos-pad">
             <p class="text-programar centers">
              SE ASIGNARON LO SIGUIENTES USUARIOS  PARA LA PROMOCIÓN
             </p>
           </div>

           <!-- tabla -->
          <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 scroll-saldo mCustomScrollbar ocultar-flow" data-mcs-theme="dark">
              <div class="box no">
                 <div class="box-body table-responsive no-padding margin-transfer">
              <table id="example18" class="table table-hover">
                <thead class="separacion">
                  <tr>
                     <th class="centers no-border">Nombre De La Empresa
                    </th>
                  </tr>
                </thead>
                <tbody class="mytabs">
               <?php for ($x=0; $x <5 ; $x++) { ?>
                <tr>
                  <th class="centers">
                    Sambum S.a de C.V
                  </th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
              </div>
            </div>
          </div>
          <!-- fin tabla -->
          <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-tag margin-traspaso sinmargin_lef">
            <div class="col-xs-12 col-sm-12 col-lg-12 margin-validar center-validar margin-10 centrado_btn_modal centers">
              <a data-toggle="modal" data-target="#" data-whatever="@mdo">
                <button type="button" class="btn-aceptar-cancelar btn_cancel" data-dismiss="modal" aria-label="Close" onclick="TextDos()">
                  CERRAR
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
<!-- fin modal 4 -->
<!-- modal 5 -->
<div class="modal fade" id="terminar_promocion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="modal_parametros_promocion2 col-xs-12 col-md-12 col-lg-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 pad-monto menos-pad">
             <p class="text-programar1 centers">
              SE GENERÓ LA SIGUIENTE PROMOCIÓN
             </p>
           </div>
           <!-- tabla -->
            <div class="col-xs-12 col-sm-12 col-md-12 pad-promocion">
              <div class="col-md-12 centers border-promocion">
                <img src="img/imagen.jpg" alt="" class="img-100">
                <p class="text-10">10%</p>
                <p class="centers">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed diam nonummy nibh euismod tincidunt ut laoreet</p>
              </div>
            </div>
            <div class="form-group col-xs-12 col-md-12 padding-tag margin-traspaso centers">
              <div class="col-xs-12 col-md-12 center-validar margin-101">
                <a data-toggle="modal" data-target="#" data-whatever="@mdo">
                  <button type="button" class="btn-aceptar-cancelar btn_cancel" data-dismiss="modal" aria-label="Close" onclick="TextDos()">
                    CERRAR
                  </button>
                </a>
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

<!-- fin modal 5 -->
        <!-- fin modals -->

        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->
    </section>
  </div>
      <!-- /.row (main row) -->
  <!-- /.content-wrapper -->
  <?php getFooter(); ?>
  <script>
function promociones(evt, option) {
    var i, tabcontent, tablinks, cambio;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(option).style.display = "block";
    evt.currentTarget.className += " active";

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("default").click();

</script>
<script type="text/javascript">
function cambioTExt(){
  document.getElementById("usuario_U").innerHTML ="<i class='fa fa-pencil-square-o' aria-hidden='true'></i> Editar";
}

</script>
<script type="text/javascript">
  function TextDos(){
  document.getElementById("gasolinera").innerHTML= "<i class='fa fa-pencil-square-o' aria-hidden='true'></i> Editar";
}
</script>
