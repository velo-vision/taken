<?php
include('funtions.php');
getHeader();
getAside();
?>
<div class="content-wrapper blanco">
  <section>
    <div class="text-usuario">
      <p><i class="fa fa-caret-right" aria-hidden="true"></i> Usuarios > </p>
    </div>
    <div class="container-fluid nomargin">
        <div class="table-responsive mailbox-messages">
          <table class="sortable table table-hover tabla-completa">
          <thead>
            <tr class="strong-td padding-size">
                <td class="centers border-usuario">
                  <strong>Nombre</strong>
                </td>
                <td class="centers border-usuario">
                  <strong>Tags Vinculados</strong>
                </td>
                <td class="centers border-usuario">
                   <strong>Saldo Actual</strong>
                </td>
                <td class="centers border-usuario">
                   <strong>RFC</strong>
                </td>
              </tr>
          </thead>
            <tbody class="table-point">
              <?php for ($i=0; $i <10 ; $i++) { ?>
               <tr class="hover-registro" onCLick="document.location='usuarios-2.php'">
                <td class="centers"><span>50</span></td>
                <td class="centers"><span>$25,000</span></td>
                <td class="centers"><span>$70,000</span></td>
                <td class="centers"><span>150</span></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <!-- /.table -->
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 centers">
      <ul class="pagination">
        <li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"><</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li>
        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li>
        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li>
        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li>
        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li>
        <li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li>
        <li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">></a></li>
      </ul>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->

  <?php // getFooter(); ?>
