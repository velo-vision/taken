<?php
include('funtions.php');
getHeader();
getAside();

?>
<style>
#nuno a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.nuno i{
  color: #fff !important;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header ">
      <h1>
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Resumen de Actividad
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".1s">
          <div class="small-box bg-aqua">
            <div class="inner uno">
            <img src="img/index/img-7.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>ACUMULADO ANTES DEL CORTE</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".2s">
          <div class="small-box bg-aqua">
            <div class="inner dos">
            <img src="img/index/img-7.png" class="resumen">
              <h3>$3,200,000</h3>
              <p>SALDO POR COBRAR AL CORTE</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".3s">

          <div class="small-box bg-aqua">
            <div class="inner tres">
            <img src="img/index/img-7.png" class="resumen">
              <h3>$100,000</h3>
              <p>VENTA PROMEDIO AL DÍA</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".4s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cuatro">
            <img src="img/index/img-5.png" class="resumen">
              <h3>2,200,000</h3>
              <p>VENTA PROMEDIO MENSUAL</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- OTROS 4 -->
      <div class="row">

        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".1s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner cinco">
            <img src="img/index/img-1.png" class="resumen">
              <h3>$10,000,000</h3>
              <p>HISTORICO VENDIDO</p>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6 wow bounceInLeft" data-wow-delay=".2s">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner seis">
            <img src="img/index/img-11.png" class="resumen" style="opacity: .5;">
              <h3>80</h3>
              <p>TERMINALES ACTIVAS</p>
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
          <section class="col-lg-12 connectedSortable">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bottom-20">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <p class="size-titulo margin-circulo">
                  <i class="fa fa-circle rotar azul-circulo" aria-hidden="true"></i><strong> Grupo:</strong> Lorem ipsum Dolor Sit S. A. de C.V.
                </p>
                <p class="size-titulo margin-circulo">
                  <i class="fa fa-circle rotar azul-circulo" aria-hidden="true"></i><strong> RFC:</strong> Historial de Dispersiones
                </p>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-offset-2 margin-circulo">
                <div class=" col-xs-12 col-sm-12 col-md-12" style="text-align:right;">
                  <a data-toggle="modal" data-target="#agregar-gasolinera" data-whatever="@mdo">
                    <button class="boton-alta" data-dismiss="modal" aria-label="Close"><span class="texto-res"><img src="img/gas.png" alt=""> Añadir Gasolinera</span></button>
                  </a>
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
                    <th>ID de Gasolineras</th>
                    <th>Nombre / Alias de gasolinera</th>
                    <th>Razón Social</th>
                    <th>Ubicación</th>
                    <th>Número de Terminales</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                  <th class="centers">Pemex-291038402</th>
                  <th class="centers">Lodermos Asturias Df</th>
                  <th class="centers">Pemex S. A. de C.V.</th>
                  <th class="centers">Nemo Enim ipsam #32.5 Voluptatem CDMX</th>
                  <th class="centers">6</th>
                </tr>
               <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
      </div>
          <!-- /.box -->
          <!-- fin tablas -->
        </section>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>

  <!--MODAL Alta usuario-->
  <div class="modal fade" id="agregar-gasolinera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="alta-usuario-gas col-md-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="The Wedding Board">
           </button>
         </div>
         <!--COLLAPSER-->
         <!-- CONTENIDO -->
            <div class="row formato-usuario">
              <div class="col-xs-12 col-md-12 centers">
                <p class="titulo">ALTA GASOLINERA</p>
              </div>
              <form >
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-4 padding-no">
                    <p>Grupo Gasolinero</p>
                  </div>
                  <div class="col-xs-12 col-md-7">
                    <input type="text" name="nom_promo" placeholder="Hidrosina">
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-4 padding-no">
                    <p>Id de gasolinera</p>
                  </div>
                  <div class="col-xs-12 col-md-7">
                    <input type="text" name="nom_promo" placeholder="Hidrosina-67">
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-4 padding-no">
                    <p id="vigencia">Nombre / Razón Social</p>
                  </div>
                  <div class="col-xs-12 col-md-7">
                    <input type="text" name="numTotal" placeholder="Hidrosina S.A. de C.V">
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-4 padding-no">
                    <p>Mail</p>
                  </div>
                  <div class="col-xs-12 col-md-7">
                    <input type="text" name="nom_promo" placeholder="jl_33outlook.com">
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-4 padding-no">
                    <p>Teléfono</p>
                  </div>
                  <div class="col-xs-12 col-md-7">
                    <input type="text" name="nom_promo" placeholder="55-30-23-45">
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-4 padding-no">
                    <p>Dirección</p>
                  </div>
                  <div class="col-xs-12 col-md-7">
                    <input type="text" name="nom_promo" placeholder="Calle Gral. Antonio León 67, San Miguel Chapultepec II Seccion">
                  </div>
                </div>
                <div class="col-xs-12 col-md-12">
                  <div class="col-xs-12 col-md-2 col-md-offset-4">
                    <a data-toggle="modal" data-target="#agregar-gasolinera-exitosa" data-whatever="@mdo" data-dismiss="modal" aria-label="Close">
                      <p class="boton-dar-alta">Dar de alta</p>
                    </a>
                  </div>
                </div>
              </form>
            </div>
             <!-- fin CONTENIDO -->
         <!--COLLAPSER-->
       </div>
       </form>
     </div>
   </div>
  </div>
  <!--MODAL-->
  <!--MODAL DADO DE ALTA-->
  <div class="modal fade" id="agregar-gasolinera-exitosa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div>
       <form role="form">
       <div class="alta col-md-12">
         <div>
           <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
             <img src="img/modal/cerrar1.png" alt="The Wedding Board">
           </button>
         </div>
         <!--COLLAPSER-->
           <div class="col-xs-12 col-md-12 padding-alta">
             <div class="col-md-12 centers">
               <img src="img/gasolina.jpg" alt="" width="100px">
             </div>
             <p class="text-alta centers margin-alta">
               Se agrego exitosamente la gasolinera
             </p>
             <p class="centers color-alta margin-alta1">
               pemex-291038402
             </p>
           </div>
          <div class="form-group col-sm-12 col-md-12 col-lg-12 padding-tag margin-traspaso">
            <div class="col-xs-12 col-sm-12 col-md-12 margin-validar center-validar margin-15 centers">
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
