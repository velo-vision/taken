<?php
include('funtions.php');
getHeader();
getAside();

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h4 class="linea centrar-perfil">
        <i class="fa fa-sort-asc rotar color-blue" aria-hidden="true"></i> <span class="usuario-size">Administrador de perfiles</span> <span class="mayor-usuario"> > </span> <span class="r">Agregar un tag</span>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class=" box-primary">
          <!-- /.box-header -->
          <!-- form start -->
          <div class="col-xs-12 col-md-12 text-formulario">
            <p class="centers">AGREGAR UN TAG CON EL SIGUIENTE FORMULARIO</p>
          </div>
          <form role="form">
            <div class="box-body col-md-8 col-md-offset-2 col-xs-12">
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Número de tag:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="123-KV">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Confirmar número de tag:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="123-KV">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Nombre:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="JOAQUIN RODRIGUEZ">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Marca:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="CHEVROLET">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Placa:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="71RNA">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Modelo:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="SONIC LTZ">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">
                  <p>
                   Año:
                  </p>
                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar">
                  <input type="text" class="form-control1 centers" id="exampleInputEmail1" placeholder="2017">
                </div>
              </div>
              <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag">
                <div class="col-sm-4 rights padding-tag">

                </div>
                <div class="col-sm-5 col-offset-sm-3 margin-validar center-validar">
                  <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
                    <button type="submit" class="btn-tag btn-primary-tag">Validar Tag</button>
                  </a>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </form>
        </div>
        <!-- /.box -->

      </div>
      <!--MODAL aceptar-->
     <div class="modal fade" id="proveedores-aceptar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div>
           <div class="modal-body col-md-12">
             <div>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <img src="img/modal/cerrar1.png" alt="The Wedding Board">
               </button>
             </div>
             <!--COLLAPSER-->
               <div class="col-md-12">
                 <p class="text-sunumero centers">
                   SU NÚMERO DE TAG ES
                 </p>
                 <p class="text-numero centers">
                   123-kv
                 </p>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers">
                 <a href="#!">
                   <p class="btn-aceptar">
                     Aceptar
                   </p>
                 </a>
               </div>
             <!--COLLAPSER-->
           </div>
         </div>
       </div>
     </div>
     <!--MODAL-->
    </section>
  </div>
      <!-- /.row (main row) -->

  <!-- /.content-wrapper -->

  <?php getFooter(); ?>
