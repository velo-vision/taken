<?php
include('funtions.php');
getHeader();
getAside();
?>
<style>
#ndos a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.ndos i{
  color: #fff !important;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h4 class="linea">
        <i class="fa fa-sort-asc rotar color-blue" aria-hidden="true"></i> <span class="usuario-size">Perfil de Usuarios</span>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
        <div class="col-lg-12">
          <div class="col-lg-4">
            <div class="col-lg-12">
              <img src="" class="circle">
              <p>CHEVROLET S.A. DE C.V.</p>
              <P>CHEVROLET MOTORS</P>
              <!-- Nav tabs -->
                <ul class="nav nav-tabs color-tabs bloque-perfil" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#A" aria-controls="A" role="tab" data-toggle="tab">Toda la actividad</a>
                  </li>
                  <li role="presentation">
                    <a href="#B" aria-controls="B" role="tab" data-toggle="tab">Configuracion de la cuenta</a>
                  </li>
                </ul>
            </div>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="A">
                </div>
                 <div role="tabpanel" class="tab-pane active" id="b">
                </div>
              </div>
          </div>
          <div class="col-lg-8">

          </div>
        </div>
          <!-- tablas -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box no">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table id="example4" class="table table-hover">
                <thead class="separacion">
                  <tr>
                    <th>Nombre</th>
                    <th>Tags Vinculados</th>
                    <th>FECHA</th>
                    <th>Saldo Promedio Mensual</th>
                    <th>RFC</th>
                    <th>Historíco Recargas</th>
                  </tr>
                </thead>
                <tbody class="mytabs">
                <?php for ($i=0; $i <5 ; $i++) { ?>
                  <tr class="hover-registro" onCLick="document.location='usuario2.php'">
                    <td class="centers text-color">Lorem Ipsum Dolor Sit S. A. de C.V. </td>
                    <td class="centers">50</td>
                    <td class="centers">$25,000</td>
                    <td class="centers">$70,000</td>
                    <td class="centers">MOMD821206HR01</td>
                    <td class="centers">70</td>
                  </tr>
                <?php } ?>
                <?php for ($x=0; $x <5 ; $x++) { ?>
                  <tr class="hover-registro" onCLick="document.location='usuario2.php'">
                    <td class="centers text-color"><span>Lorem Ipsum Dolor</span></td>
                    <td class="centers">50</td>
                    <td class="centers">$25,000</td>
                    <td class="centers">$70,000</td>
                    <td class="centers">MOMD821206HR01</td>
                    <td class="centers">150</td>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php getFooter(); ?>
