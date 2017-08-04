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
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Administrador de perfiles / Tag vinculados
      </h3>
      <div class="row">
      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 separacion-tag sin-padding">
	      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 sin-padding">	      	
      		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 form-group listas-fij">        
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
	      	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 sin-padding">	      	
		      	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-lg-offset-1">
		      		<button class="button-vinculado"><i class="fa fa-plus-square" aria-hidden="true"></i> <span class="texto-res"> Agregar nuevo Tag</span></button>
		      	</div>
		      	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
		      		<button class="button-vinculado2"><i class="fa fa-minus-square-o" aria-hidden="true"></i> <span class="texto-res"> Remover Tag</span></button>
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
            <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-hover">
                <thead class="separacion">
                  <tr>
                     <th><div class="checkbox checkbox-success" id="seleccionartodos">
                        <input id="checkTodos" type="checkbox">
                        <label for="checkTodos">ID de Tag</label>
                    </div>                    
                    </th>
                     <th>Nombre / Alias</th>
                     <th>Creación</th>
                     <th>Saldo Total</th>
                     <th>Fecha Último Uso</th>
                     <th>Editar</th>                     
                  </tr>
                </thead>
                <tbody class="mytabs">               
               <?php for ($x=1; $x <10 ; $x++) { ?>
                <tr>
                  <th>
                  	<div class="checkbox checkbox-success">
                        <input id="<?php echo $x; ?>" type="checkbox" name="option[]">
                        <label for="<?php echo $x; ?>">2910384561V</label>
                    </div>
                  </th>
                  <th>Adrian Rofriguez</th>
                  <th>20/09/2017</th>                  
                  <th>$340,000</th>
                  <th>20/08/2017</th>
                  <th>
                  	<a href="#"><p class="editar-tag"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>   Editar</p></a>
                  </th>
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
  </div>
  <!-- /.content-wrapper -->

<?php getFooter(); ?>