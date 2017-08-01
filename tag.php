<?php 
include('funtions.php');
getHeader();
getAside(); 
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Tag <span> > </span><span>Resumen</span>
      </h1>     
    </section>
    <!-- Main content -->
    <section class="content"> 
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
 
          <!-- tablas -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example2" class="table table-hover">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Promedio de Recargas</th>
                    <th>Acumulado de Recargas</th>
                    <th>Acumulado de Litros Magna</th>
                    <th>Acumulado de Pesos Magna</th>
                    <th>Acumulado de Litros Premium</th>
                    <th>Acumulado de Pesos Premium</th>
                    <th>Acumulado de Litros Diesel</th>
                    <th>Acumulado de Pesos Diesel</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <10 ; $i++) { ?>
                   <tr>
                  <th>Lorem ipsum Dolor sir S:A de CV</th>
                  <th>300</th>
                  <th>2,300</th>
                  <th>25,000</th>
                  <th>$345,000</th>
                  <th>30,000</th>
                  <th>$420,000</th>
                  <th>$50,000</th>
                  <th>$540,000</th>
                </tr>
               <?php } ?>

               <?php for ($x=0; $x <10 ; $x++) { ?>
                <tr>
                  <th>ipsum Dolor sir S:A de CV</th>
                  <th>400</th>
                  <th>5,300</th>
                  <th>30,000</th>
                  <th>$645,000</th>
                  <th>20,000</th>
                  <th>$400,000</th>
                  <th>$80,000</th>
                  <th>$740,000</th>
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
        <!-- /.Left col -->
       
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php getFooter(); ?>