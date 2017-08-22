<?php
include('funtions.php');
getHeader();
getAside();
?>

<style>
#ndiesisiete a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.ndiesisiete i{
  color: #fff !important;
}
</style>


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
          <a data-toggle="modal" data-target="#numero-tag" data-whatever="@mdo">
            <button class="boton-alta" data-dismiss="modal" aria-label="Close"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> <span class="texto-res"> DAR DE ALTA</span></button>
          </a>
          <a data-toggle="modal" data-target="#desvincular-tag" data-whatever="@mdo">
            <button class="alta-tag" data-dismiss="modal" aria-label="Close"><i class="fa fa-link" aria-hidden="true"></i> <span class="texto-res"> DESVINCULAR</span></button>
          </a>
	    </div>
      </div>
    </section>
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
                <div class="box-body table-responsive no-padding margin-transfer">
                  <table id="example15" class="table table-hover border-tabla">
                    <thead class="separacion">
                      <tr>
                         <th>
                           <div class="checkbox checkbox-success" id="seleccionartodos">
                              <input id="checkTodos" type="checkbox">
                              <label for="checkTodos" style="font-weight: 600;">ID TAG</label>
                           </div>
                         </th>
                         <th>Usuario</th>
                         <th>Nombre o alis</th>
                         <th>Vehiculo</th>
                         <th>Saldo total</th>
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
                      <th class="centers">Lorem Ipsum Dolor
                      </th>
                      <th class="centers">Lorem Ipsum Dolor</th>
                      <th class="centers">Chevrolet Sonic LTZ</th>
                      <th class="centers">$25,000</th>
                      <th class="centers"><a data-toggle="modal" data-target="#bloquear-2" data-whatever="@mdo"><p class="altas-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> Bloquear</p></a></th>
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
          <!-- /.box -->
          <!-- fin tablas -->
        </section>
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
  </section>
     <!-- /.Left col -->
   </div>
   <!-- /.row (main row) -->

 </section>
<!--MODAL desvincular-tag------------------------------------------------------------->
<div class="modal fade" id="desvincular-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-vinculado-2 col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto">
           <p class="text-programar centers">
             A continuación se desvinculara el id del tag
           </p>
           <p class="text-vinculado centers">
             123-KV
           </p>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
         <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
        </div>
        <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#tag-desvinculado" data-whatever="@mdo">
              <button type="submit" class="btn-aceptar-cancelar btn-primary-aceptar" data-dismiss="modal" aria-label="Close">Aceptar</button>
            </a>
          </div>
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
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
<!--MODAL tag-desvinculado -->
<div class="modal fade" id="tag-desvinculado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-vinculado-2 col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto pad-monto2">
           <p class="text-programar centers">
             Se a desvinculara el id del tag correctamente
           </p>
           <p class="text-vinculado3 centers">
             123-KV
           </p>
         </div>
        <div class="form-group col-xs-12 col-md-12 padding-tag margin-traspaso">
          <div class="col-xs-12 col-sm-12 margin-validar center-validar margin-10 centers">
            <a data-toggle="modal" data-target="#proveedores-aceptar" data-whatever="@mdo">
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
<!--MODAL Alta tag-->
<div class="modal fade" id="numero-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="alta-usuario-tag col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
       <!-- CONTENIDO -->
          <div class="row formato-usuario">
            <div class="col-xs-12 col-md-12 centers">
              <p class="titulo">ALTA DE TAG</p>
            </div>
            <form >
              <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-4 padding-no">
                  <p>Número de tag</p>
                </div>
                <div class="col-xs-12 col-md-7">
                  <input type="text" name="nom_promo" placeholder="Hidro-1234-5678">
                </div>
              </div>
              <div class="col-xs-12 col-md-12">
                <div class="col-xs-12 col-md-2 col-md-offset-4">
                  <a data-toggle="modal" data-target="#alta-exitosa" data-whatever="@mdo" data-dismiss="modal" aria-label="Close">
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
<!--MODAL alta-exitosa -->
<div class="modal fade" id="alta-exitosa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-vinculado col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto4">
           <p class="text-programar centers">
             Se dio de alta exitosamente la tag
           </p>
           <p class="text-vinculado centers">
             hidro 1234-5678
           </p>
         </div>
        <div class="form-group col-sm-12 col-md-12 padding-tag margin-traspaso">
          <div class="col-xs-12 col-sm-12 margin-validar center-validar margin-10 centers">
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
<!--MODAL bloquear segundo tag-->
<div class="modal fade" id="bloquear-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="alta-bloquear-tag col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
       <div class="col-md-12 pad-monto">
         <p class="text-programar centers">
           Deseas bloquear temporalmente al siguiente tag
         </p>
         <p class="text-vinculado centers">
           123-KV
         </p>
       </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
         <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
        </div>
        <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#bloqueado-2" data-whatever="@mdo">
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
<div class="modal fade" id="bloqueado-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="alta-bloqueado-tag col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-xs-12 col-md-12 padding-bloquear">
           <div class="col-xs-12 col-md-12 centers img-candado">
             <img src="img/candado.png" class="size-candado" alt="">
           </div>
           <p class="text-programar centers">
             El siguiente tag se bloqueo exitosamente
           </p>
           <p class="centers color-sit">
             123-KV
           </p>
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
<script>
  function activarcasilla(check){
  if(document.x.check.checked==true){
  document.x.b1.style.visibility="visible";
  }else{
  document.x.b1.style.visibility="hidden";
  }
  }
</script>
<form name="x">
<input name="check" type="checkbox" id="check" value="checkbox" onclick="activarcasilla(this)">
&nbsp;<input name="b1" type="submit" value="enviar" style="visibility:hidden;">
</form>
  <!-- /.content-wrapper -->
<?php getFooter(); ?>
