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
            <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Administrador de perfiles / Tag vinculados
          </h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 rights-tag nopadding">
          <button class="vinculado-agregar"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="texto-res"> Agregar Nuevo Tag</span></button>
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
              <button class="vinculado-remover"><i class="fa fa-minus-square-o" aria-hidden="true"></i> <span class="texto-res"> Remover Tag</span></button>
            </a>
            <a data-toggle="modal" data-target="#reportar-tag" data-whatever="@mdo">
              <button class="vinculado-reportar"><i class="fa fa-shield" aria-hidden="true"></i> <span class="texto-res"> Reportar Tag</span></button>
            </a>
            <a data-toggle="modal" data-target="#bloquear" data-whatever="@mdo">
              <button class="vinculado-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> <span class="texto-res"> Bloquear</span></button>
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
                     <th>Creacion</th>
                     <th>Saldo total</th>
                     <th>Fecha Último uso</th>
                     <th>Editar</th>
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
                  <th class="centers">30/09/2012</th>
                  <th class="centers">$656</th>
                  <th class="centers">30/09/2012</th>
                  <th class="centers"><a data-toggle="modal" data-target="#editar-tag" data-whatever="@mdo"><p class="editar-vinculo-tag"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>   Editar</p></a></th>
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
  <!-- /.content-wrapper -->
  <!--MODAL bloquear-->
 <div class="modal fade" id="bloquear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
           <div class="col-md-12 pad-monto">
             <p class="text-programar centers">
               Deseas bloquear el tag
             </p>
             <p class="text-vinculado centers">
               291038402
             </p>
           </div>
          <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
           <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
          </div>
          <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
            <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
              <a data-toggle="modal" data-target="#bloqueado" data-whatever="@mdo">
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
 <!--MODAL bloqueado-->
<div class="modal fade" id="bloqueado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div>
      <form role="form">
      <div class="modal-bloqueado col-md-12">
        <div>
          <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
            <img src="img/modal/cerrar1.png" alt="The Wedding Board">
          </button>
        </div>
        <!--COLLAPSER-->
          <div class="col-md-12 pad-monto">
            <div class="col-md-12 centers">
              <img src="img/candado.png" alt="" width="25%;" style="margin-bottom:20px;">
            </div>
            <p class="text-programar centers">
              el id del tag
            </p>
            <p class="text-vinculado centers">
              291038402
            </p>
            <p class="text-programar centers">
              Se ha bloqueado correctamente
            </p>
          </div>
        <!--COLLAPSER-->
      </div>
      </form>
    </div>
  </div>
</div>
<!--MODAL-->
<!-- reportar ------------------------------->
<!--MODAL reportar-tag-->
<div class="modal fade" id="reportar-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
         <div class="col-md-12 pad-monto">
           <p class="text-programar centers">
             Deseas reportar el tag
           </p>
           <p class="text-vinculado centers">
             291038402
           </p>
         </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra">
         <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
        </div>
        <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#reportado-tag" data-whatever="@mdo">
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
<!--MODAL reportado-->
<div class="modal fade" id="reportado-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-bloqueado col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto">
           <div class="col-md-12 centers">
             <img src="img/seguridad.png" alt="" width="25%;" style="margin-bottom:20px;">
           </div>
           <p class="text-programar centers">
             el id del tag
           </p>
           <p class="text-vinculado centers">
             291038402
           </p>
           <p class="text-programar centers">
             Se ha reportado correctamente
           </p>
         </div>
       <!--COLLAPSER-->
     </div>
     </form>
   </div>
 </div>
</div>
<!--MODAL-->
<!--MODAL Editar-->
<div class="modal fade" id="editar-tag" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-editar-tag col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
        <div class="col-md-12 centers">
          <div class="col-md-12 pad-monto">
            <p class="text-programar">
              id del tag <span class="text-vinculado">291038402</span>
            </p>
          </div>
          <div class="col-md-12 centers" style="margin-top:15px;">
            <p class="text-id-tag centers">
              cambiar nombre / alias
            </p>
            <input type="text" name="" class="tag-form" placeholder="Adrian Rodriguez" width="100%">
          </div>
          <div class="col-md-12 centers">
            <p class="text-id-tag centers">
              marca
            </p>
            <input type="text" name="" class="tag-form" placeholder="Chevrolet" width="100%">
          </div>
          <div class="col-md-12 centers">
            <p class="text-id-tag centers">
              modelo
            </p>
            <input type="text" name="" class="tag-form" placeholder="Sonic LTZ" width="100%">
          </div>
          <div class="col-md-12 centers">
            <p class="text-id-tag centers">
              año
            </p>
            <input type="text" name="" class="tag-form" placeholder="2017" width="100%">
          </div>
          <div class="col-md-12 centers">
            <p class="text-id-tag centers">
              placa
            </p>
            <input type="text" name="" class="tag-form" placeholder="7RNA" width="100%">
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 centers margin-contra" style="margin-top:30px;">
         <input type="text" name="" class="tamaño-form" placeholder="Contraseña: Admin">
        </div>
        <div class="form-group col-sm-10 col-sm-offset-1 col-md-10 col-lg-11 padding-tag margin-traspaso">
          <div class="col-xs-6 col-sm-6 margin-validar center-validar margin-10">
            <a data-toggle="modal" data-target="#editar-aceptar" data-whatever="@mdo">
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
<!--MODAL Editar-aceptar-->
<div class="modal fade" id="editar-aceptar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div>
     <form role="form">
     <div class="modal-bloqueado col-md-12">
       <div>
         <button type="button" class="close pad-5" data-dismiss="modal" aria-label="Close">
           <img src="img/modal/cerrar1.png" alt="The Wedding Board">
         </button>
       </div>
       <!--COLLAPSER-->
         <div class="col-md-12 pad-monto">
           <div class="col-md-12 centers">
             <img src="img/seguridad.png" alt="" width="25%;" style="margin-bottom:20px;">
           </div>
           <p class="text-programar centers">
             el nombre o alias del tag
           </p>
           <p class="text-vinculado centers">
             291038402
           </p>
           <p class="text-programar centers">
             Se ha cambiado correctamente
           </p>
         </div>
       <!--COLLAPSER-->
     </div>
     </form>
   </div>
 </div>
</div>
<!--MODAL-->
<?php getFooter(); ?>
