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
        <i class="fa fa-sort-asc rotar color-blue" aria-hidden="true"></i> <span class="usuario-size" >Perfil de Usuarios <span id="titulo_p"></span></span>
      </h4>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12 connectedSortable pading_cero">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pading_cero pading_ceroP">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 pading_ceroP">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 cuadro">
              <div class="col-lg-12 centrado-usu">
              
                <img src="img/Chevrolet_logo.jpg" class="circle">
                <p>CHEVROLET S.A. DE C.V.</p>
                <P><span>CHEVROLET MOTORS</span></P>
              </div>
                <div class="tab col-lg-12" >
                  <button class="tablinks perfil-n" onclick="perfilUno(event, 'Notificacion')" id="default">
                    <i class="fa fa-home fa-lg" aria-hidden="true"></i> Toda la actividad
                  </button><br>
                  <button class="tablinks perfil-n" onclick="perfilUno(event, 'Cuenta')"><i class="fa fa-cog fa-lg" aria-hidden="true"></i> Configuracion de la cuenta</button>
                </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 pading_cero pading_ceroP">
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
              <!-- contenido -->
                <!-- Content Wrapper. Contains page content -->
                <div class="col-xs-12 col-sm-12 col-lg-12 sinpaddig-perfil margen_top pading_cero"> 
                  <!-- Main content -->
                  <section class="content pad_top sinpaddig-perfil pading_cero">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <!-- ./col -->       
                    </div>      
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                      <!-- Left col -->
                        <section class="col-xs-12 col-sm-12 col-lg-12">                         
                        <!-- tabs -->
                          <div class="row">
                            <div class=" col-xs-12 col-sm-12 col-lg-12 tab2 linea_Cuenta">
                              <div class="col-xs-12 col-sm-12 col-lg-5">
                                <h4 class="linea">
                                  <span class="usuario-size">Cuenta De Perfil</span>
                                </h4>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-lg-7 nopadding_tabs">
                                <div class="col-xs-4 col-sm-4 col-lg-4 pading_ceroP">
                                  <button class="links bottom-line" onclick="openCity(event, 'Info')" id="defaultOpen">Información personal</button>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-lg-4 pading_ceroP">
                                  <button class="links bottom-line" onclick="openCity(event, 'Cambiar_avatar')">Cambiar avatar</button>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-lg-4 pading_ceroP">
                                  <button class="links bottom-line" onclick="openCity(event, 'Password')">Cambiar la contraseña</button>
                                </div>                                
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div id="Info" class=" col-xs-12 col-sm-12 col-lg-12 tabsC">
                              <div class="col-xs-12 col-sm-12 col-lg-8 col-lg-offset-1 sinpaddig-perfil">
                              <form class="formulario_uno">
                                <div class="col-xs-12 col-sm-12 col-lg-12 sinpaddig-perfil">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Nombre o Negocio</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="nombre">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-lg-12 sinpaddig-perfil">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Dirección</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="direccion">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-lg-12 sinpaddig-perfil">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Razón Social</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="social">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-lg-12 sinpaddig-perfil">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>RFC</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="rfc">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-lg-12 sinpaddig-perfil">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Numero de teléfono</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="tel">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-lg-12 sinpaddig-perfil">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Correo</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="email">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-lg-12 sinpaddig-perfil">
                                <div class="col-lg-3"></div>                                  
                                  <div class="col-xs-12 col-sm-12 col-lg-6 ">                                    
                                    <div class="col-xs-12 col-sm-6 col-lg-6 ">
                                      <button class="colorboton1 ">Guardar</button>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-lg-6">
                                      <button class="colorboton2">Cancelar</button>
                                    </div>
                                  </div>
                                </div>
                                </form>
                              </div>
                            </div>

                            <div id="Cambiar_avatar" class="col-xs-12 col-lg-12 tabsC">
                              <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                                <!-- <div class="col-lg-12"> -->
                                  <form>
                                    <div id="list" class="col-xs-12 col-lg-12 img_avatar" >
                                     <!--  <output  class=""> -->
                                        <img src="img/avatar.png" class="avatar-img">
                                      <!-- </output> -->
                                    </div>                                    
                                    <div class="col-xs-12 col-lg-12 sinpadding2">
                                      <div class="form-group">
                                        <input type="file" name="files[]" id="file" class="input-file">
                                        <label for="file" class="btn btn-tertiary js-labelFile">
                                          <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                          <span class="js-fileName"> Seleccionar imagen</span>
                                        </label>
                                      </div>
                                    </div>
                                    <div class="col-xs-12 col-lg-12 padding-no">
                                      <div class="col-xs-12 col-lg-6 padding-derecho">
                                        <button class="btn_avatar btn_avatar_rojo">Enviar</button>
                                      </div>
                                      <div class="col-xs-12 col-lg-6 padding-dizquierdo">
                                        <button class="btn_avatar btn_avatar_gris">Cancelar</button>
                                      </div>
                                    </div>
                                  </form>
                                <!-- </div> -->
                              </div>
                            </div>

                            <div id="Password" class="col-xs-12 col-sm-12 col-lg-12 tabsC">
                              <div class="col-xs-12 col-sm-12 col-lg-8 col-lg-offset-1">
                              <form class="formulario_uno">
                              <div class="col-xs-12 col-sm-12 col-lg-12">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Contraseña Actual</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="passActual">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-lg-12">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Escriba su nueva constraseña</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="new_pass">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-lg-12">
                                  <div class="col-xs-12 col-sm-4 col-lg-3 sinpaddig-perfil">
                                    <p>Confirmar contraseña</p>
                                  </div>
                                  <div class="col-xs-12 col-sm-8 col-lg-6">
                                    <input type="text" name="confirm">
                                  </div>
                                </div>                                
                                <div class="col-xs-12 col-sm-12 col-lg-12">
                                     <div class="col-lg-3"></div>                              
                                  <div class="col-xs-12 col-lg-6">
                                    <div class="col-xs-12 col-sm-6 col-lg-6">
                                      <button class="colorboton1 ">Guardar</button>
                                    </div>
                                     <div class="col-xs-12 col-sm-6 col-lg-6">
                                      <button class="colorboton2">Cancelar</button>
                                    </div>
                                  </div>
                                </div>
                                </form>
                              </div>
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
          </div>
        </div>
        </section>
    <!-- /.content -->
      </div>
  <!-- /.content-wrapper -->
    </section>
  </div>


<script>
function perfilUno(evt, option) {
    var i, tabcontent, tablinks, cambio;
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


      // if(i =="Cuenta"){
      //   cambio = document.getElementById('titulo_p').innerHTML ="/ Configuracion de la cuenta";
      // }else{
      //   cambio = document.getElementById('titulo_p').innerHTML ="/ Toda la actividad";
      // }
      // if(i == "Notificacion"){
        
      // }
    
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("default").click();
</script>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabsC");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("links");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

<script type="text/javascript">
function archivo(evt) {
      var files = evt.target.files; // FileList object
       
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
      document.getElementById('file').addEventListener('change', archivo, false);
</script>

<script type="text/javascript">
// function cambio(){
//   document.getElementById('titulo_p').innerHTML="/ Configuracion";
// }
  
</script>
<?php getFooter(); ?>
