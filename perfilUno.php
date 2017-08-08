<?php
include('funtions.php');
getHeader();
getAside();
?>
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
        <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 connectedSortable pading_cero">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pading_cero">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-2">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cuadro">
              <div class="col-lg-12 centrado-usu">
                <img src="img/Chevrolet_logo.jpg" class="circle">
                <p>CHEVROLET S.A. DE C.V.</p>
                <P><span>CHEVROLET MOTORS</span></P>
              </div>
                <div class="tab col-lg-12" >
                  <button class="tablinks perfil-n" onclick="perfilUno(event, 'Notificacion')" id="defaultOpen"><i class="fa fa-home fa-lg" aria-hidden="true"></i> Toda la actividad</button><br>
                  <button class="tablinks perfil-n" onclick="perfilUno(event, 'Cuenta')"><i class="fa fa-cog fa-lg" aria-hidden="true"></i> Configuracion de la cuenta</button>
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-10 pading_cero">
            <!-- Tab panes -->
            <!-- notificacion -->
            <div id="Notificacion" class="tabcontent">
              <!-- contenido -->
              <!-- Content Wrapper. Contains page content -->
                <div class="col-xs-12 col-sm-12 col-lg-12 sinpaddig-perfil margen_top pading_cero"> 
                  <!-- Main content -->
                  <section class="content pad_top sinpaddig-perfil pading_cero">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-lg-4 col-sm-4 col-xs-12">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner uno" style="background: #f36a5a;">
                          <img src="img/index/img-1.png" class="resumen">
                            <h3 class="titulos_perfil">$3,200,000</h3>
                            <p>SALDO TOTAL</p>
                          </div>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-sm-4 col-xs-12">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner dos" style="background: #e74f5b;">
                          <img src="img/index/img-9.png" class="resumen resumen2">
                            <h3 class="titulos_perfil">$1,000,000</h3>
                            <p>SALDO PROMEDIO MENSUAL</p>
                          </div>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-4 col-sm-4 col-xs-12">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                          <div class="inner tres" style="background: #8f44ad;">
                          <img src="img/index/img-5.png" class="resumen">
                            <h3 class="titulos_perfil">80</h3>
                            <p>CUENTAS ACTIVAS</p>
                          </div>
                        </div>
                      </div>
                      <!-- ./col -->       
                    </div>      
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                      <!-- Left col -->
                        <section class="col-xs-12 col-lg-12 connectedSortable">
                         <h4 class="linea">
                          <i class="fa fa-sort-asc rotar color-blue" aria-hidden="true"></i> <span class="usuario-size">Notificaciones</span>
                        </h4>
                        <!-- tablas -->
                          <div class="row">
                            <div class="col-xs-12 col-lg-12 scroll">
                              <div class="box top">
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                  <table id="example12" class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>Notificaciones</th>
                                        <th>Descripciones</th>
                                        <th>Fecha</th>
                                      </tr>
                                    </thead>
                                    <tbody class="mytabs mytabs2">                                    
                                      <tr>
                                        <th class="centers"><span><img src="img/gasolinera.png"></span>   Recargar tag</th>
                                        <th class="centers">La recarga de tag se realizo exitosamente</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                      <tr>
                                        <th class="centers"><span><img src="img/tag.png"></span>   Recarga resiente de gasolina</th>
                                        <th class="centers">Se agregaron 20 litros con el id 2135 - 5321</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                      <tr>
                                        <th class="centers"><span><img src="img/recarga.png"></span>   Recarga resiente de gasolina</th>
                                        <th class="centers">Se agregaron 20 litros con el id 2135 - 5321</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                      <tr>
                                        <th class="centers"><span><img src="img/gasolinera.png"></span>   Recargar tag</th>
                                        <th class="centers">La recarga de tag se realizo exitosamente</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                      <tr>
                                        <th class="centers"><span><img src="img/tag.png"></span>   Recarga resiente de gasolina</th>
                                        <th class="centers">Se agregaron 20 litros con el id 2135 - 5321</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                      <tr>
                                        <th class="centers"><span><img src="img/recarga.png"></span>   Recarga resiente de gasolina</th>
                                        <th class="centers">Se agregaron 20 litros con el id 2135 - 5321</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                       <tr>
                                        <th class="centers"><span><img src="img/bloqueado.png"></span>   Tag Bloqueado</th>
                                        <th class="centers">Se bloqueo el tag 3450 - 23345</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                      <tr>
                                        <th class="centers"><span><img src="img/seguro.png"></span>   Reporte de Tag</th>
                                        <th class="centers">Se bloqueo por robo el tag 3456 -1324564</th>
                                        <th class="centers">30/09/2017</th>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <!-- /.box-body -->
                              </div>
                              <!-- /.box -->
                            </div>       
                          </div>    
                        <!-- /.box -->
                      </section>
                    </div>
                      <!-- /.Left col -->
                    <!-- /.row (main row) -->
                  </section>
                  <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
              <!-- fin contenido -->
            </div>
            <!-- fin notificacion -->
            <!-- cuenta -->
            <div id="Cuenta" class="tabcontent">
              <h3>Paris</h3>
              <p>Cuenta</p> 
            </div>
            <!-- fin cuenta -->
            <!-- fin tab -->
          </div>
          <!-- fin tabs -->
        </div>

        </section>
        <!-- /.Left col -->

      </div>
      <!-- /.row (main row) -->

<script>
function perfilUno(evt, option) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(option).style.display = "block";
    evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>









    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php getFooter(); ?>
