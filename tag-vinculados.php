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
        <div class="col-xs-6 col-sm-6 col-md-7">
          <h3 class="linea size-titulo">
            <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Administrador de perfiles / Tag vinculados
          </h3>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-5 rights" style="margin-top:20px;">
          <button class="vinculado-remover"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="texto-res"> Agregar Nuevo Tag</span></button>
        </div>
      </div>
    </section>
    <section class="content size">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 sin-padding">
      		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-5 form-group listas-fij">
		        <select class="form-control texto-res">
		          <option>FECHA</option>
		          <option>option 2</option>
		          <option>option 3</option>
		          <option>option 4</option>
		          <option>option 5</option>
		        </select>
		    </div>
      		<div class=" col-xs-6 col-sm-6 col-md-6 col-lg-5 form-group listas-fij">
		        <select class="form-control texto-res">
		          <option>MONTO</option>r
		          <option>option 2</option>
		          <option>option 3</option>
		          <option>option 4</option>
		          <option>option 5</option>
		        </select>
	      	</div>
	      </div>
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 sin-padding">
          <div class="col-xs-6 col-sm-6 col-md-4">
            <button class="vinculado-remover"><i class="fa fa-minus-square-o" aria-hidden="true"></i> <span class="texto-res"> Remover Tag</span></button>
          </div>
	      	<div class="col-xs-6 col-sm-6 col-md-4 centers">
	      		<button class="vinculado-reportar"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="texto-res"> Reportar Tag</span></button>
	      	</div>
	      	<div class="col-xs-6 col-sm-6 col-md-4" style="text-align:right;">
	      		<button class="vinculado-bloquear"><i class="fa fa-lock" aria-hidden="true"></i> <span class="texto-res"> Bloquear</span></button>
	      	</div>
	  		</div>
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
                  <th class="centers"><a href="#"><p class="editar-tag"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>   Editar</p></a></th>
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

<?php getFooter(); ?>
