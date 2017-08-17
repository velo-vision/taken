<?php
include('funtions.php');
getHeader();
getAside();

?>
<!-- menu activo -->
<style>
#ncatorceDos a{
    color: #fff;
    background: url(img/liston.png) center center no-repeat;
    background-size: cover;
}
.ncatorceDos i{
  color: #fff !important;
}
</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header margin-usuario">
      <h1 class="linea">
        <i class="fa fa-sort-asc rotar color-azul" aria-hidden="true"></i> Promociones / Crear Promoción<span class="mayor"> </span>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content size">
      <!-- Small boxes (Stat box) -->
    </section>

        <!-- /.Left col -->
       <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="promociones col-xs-12 col-sm-12 col-md-12" >
          <div class="col-xs-6 col-sm-6 col-md-2 padding-no">
            <button class="tablinks2 perfil-n" onclick="promociones(event, 'CrearPromo')" id="default">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i> CREAR PROMOCIÓN
            </button>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-2 padding-no">
            <button class="tablinks2 perfil-n" onclick="promociones(event, 'AsignarPromo')">
              <i class="fa fa-users" aria-hidden="true"></i> ASIGNAR PROMOCIÓN
            </button>
          </div>
        </div>
        <section >
           <div id="CrearPromo" class="tabcontent">
           <!-- CONTENIDO -->
              <div class="row formatoPromocion">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <p class="titulo">CREAR PROMOCIÓN</p>
                </div>
                <form  >
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 padding-no">
                      <p>Nombre de la promoción</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <input type="text" name="nom_promo" placeholder="Tanken aniversario">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <p>Vigencia del</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
                      <div class="col-xs-12 col-sm-12 col-md-5 padding-no">
                        <input type="date" name="" value="">
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-2">
                        <p id="centrado">hasta</p>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-5 padding-no">
                        <input type="date" name="" value="">
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-8 col-sm-6 col-md-6 padding-no">
                      <p id="vigencia">Número de usos totales</p>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-6">
                      <input type="number" name="numTotal" placeholder="2">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-8 col-sm-6 col-md-6 ">
                      <p id="vigencia">Número de usos por usuario</p>
                    </div>
                    <div class="col-xs-4 col-sm-6 col-md-6">
                      <input type="number" name="numUser" placeholder="2">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Aplica un Código de Cupón</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <input type="text" name="cupon" placeholder="GASTAG-1133">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Acciones</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <select>
                        <option value="descuento">Descuento</option>
                        <option value="descuento">Descuento</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Valor de la acción</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <input type="text" name="valorAccion" placeholder="10% Descuento acumulativo">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Condiciones</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <select>
                        <option value="Saldo">Saldo promedio</option>
                        <option value="Saldo">Saldo promedio</option>
                        <option value="Saldo">Saldo promedio</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Valor de la condición</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <input type="text" name="valorCondicion" placeholder="$50000">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Adjuntar una imagen</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="file-upload">
                        <div class="file-select">
                          <div class="file-select-button" id="fileName"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                          <div class="file-select-name" id="noFile"><span>subir imagén en formato .jpg, .png o gif no mayor a 2mb.</span></div> 
                          <input type="file" name="chooseFile" id="chooseFile">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <p>Descripción</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <textarea placeholder="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa."></textarea>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5">
                      <a data-toggle="modal" data-target="#fijar_tope" data-whatever="@mdo">
                        <p class="botonActividad">SEGMENTAR PROMOCIÓN</p>
                      </a>
                    </div>                         
                  </div>
                </form>
              </div>
               <!-- fin CONTENIDO -->
           </div>
           <div id="AsignarPromo" class="tabcontent">
             asdfsdf
           </div>
          <!-- /.box -->
          <!-- fin tablas -->         
        </section>
        <!-- /.Left col -->
      </div>
      <!-- /.row (main row) -->
    </section>
  </div>
      <!-- /.row (main row) -->
  <!-- /.content-wrapper -->
  <?php getFooter(); ?>
  <script>
function promociones(evt, option) {
    var i, tabcontent, tablinks, cambio;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(option).style.display = "block";
    evt.currentTarget.className += " active";

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("default").click();
</script>
