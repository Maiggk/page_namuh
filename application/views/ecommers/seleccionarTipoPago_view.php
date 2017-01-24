
<section class="header-section fading-title parallax">
    <div class="section-shade sep-top-5x sep-bottom-3x">
      <div class="container">
        <div class="section-title upper light">
          <h2 class="small-space">Selecionar un método de pago</h2>
        </div>
      </div>
    </div>
 </section>

<div class="sep-top-2x">
        <div class="container">
         <!--   <div class="row">
                <div class="col-md-12">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>

                            <th style="text-align: right;">Precio</th>
                            <th style="text-align: right;">Total</th>

                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i=1;
                            foreach($productos as $producto)
                            { ?>
                              <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $producto['nombre']; ?></td>
                                <td><?php echo $producto['descripcion']; ?></td>
                                <td><?php echo $producto['cantidad']; ?></td>

                                <td style="text-align: right;"><?php echo decimales_ceros($producto['precio'],2); ?></td>
                                <td style="text-align: right;"><?php echo decimales_ceros($producto['total'],2); ?></td>

                              </tr>
                            <?php $i=$i+1;} ?>

                        </tbody>
                      </table>
                </div>
                <div class="col-md-12">

                </div>
            </div>
            <br/>
                <br/>
            <div class="row">

                <div class="col-md-12">
                    <div class="col-md-4">
                        <center>
                    <a href="<?php echo base_url(); ?>index.php/Metodo_tarjeta"  class="btn btn-primary btn-sm">Método tarjeta</a>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                    <a href="<?php echo base_url(); ?>index.php/Metodo_tiendas"  class="btn btn-primary btn-sm">
                        Tiendas de conveniencia
                        </a>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                        <a href="<?php echo base_url(); ?>index.php/Metodo_banco"  class="btn btn-primary btn-sm">Bancos</a>
                        </center>
                    </div>

                </div>
            </div>
            <br/>
            <br/>-->
            <div class="row">

                <div class="col-md-12">
                    <center>
                        <a href="<?php echo base_url(); ?>index.php/recibos"  class="btn btn-primary btn-sm">Historial de compras</a>
                    </center>
                </div>
            </div>





            <!---------->
            <!---------->
            <!---------->
            <!---------->
             <div class="row">
                 <div id="Proceso" class="col-md-12">
                 </div>
            </div>
            <!---------->
            <!---------->
            <!---------->


            <div class="embed-container">
             <iframe id="contenidoFrame" name="contenidoFrame" onchange="ajustar_alto_iframe('contenidoFrame')"  src="<?php echo base_url(); ?>index.php/cargarProcesoCompra" class="col-md-12 col-sm-12 col-xs-12" height="900">
  <p>Your browser does not support iframes.</p>
</iframe>
                </div>




















               <div class="row">
            <div class="col-md-12">
              <div class="text-center">

               <ul class="shop-info-link sep-top-2x sep-bottom-lg">
                  <li class="sep-bottom-sm"></li>

                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
 <a href="#" class="btn btn-primary btn-sm" onclick="ajustar_alto_iframe('contenidoFrame')">Boton</a>


		<script>
			jQuery(document).ready(function() {

                 $.ajax({
                   type: "POST", //envia la posicion por metodo post de ajax
                   data:
                   {

                   },
                    url:"<?= site_url('cargarProcesoCompra') ?>",
                   // url:base+"cargarComprobanteEs",
                    async: true,
                    success: function(response)
                    {
                    // $('#Proceso').html(response);
                     //FormWizard.init();
                    },
                    error: function (obj, error, objError){
                    alert("Error: " + objError);
                    }
                });



			});

		</script>

<script type="text/javascript">
//<![CDATA[
function ajustar_alto_iframe(iframe_name_id){
var el_Iframe = document.getElementById(iframe_name_id);
var iframeWindow = frames[iframe_name_id];
el_Iframe.style.height = "1px";
el_Iframe.style.height = iframeWindow.document.documentElement.scrollHeight +"px";
}

function autoajustar_iframe(nueva_url, iframe_name_id){
var el_iframe = document.getElementById(iframe_name_id);
var cargar_function = function(){ajustar_alto_iframe(iframe_name_id);}
if(el_iframe.readyState){ el_iframe.onreadystatechange =
function() {if (el_iframe.readyState=="complete") cargar_function();}
}else{
el_iframe.onload = cargar_function;
}
el_iframe.src = nueva_url;
}

function ajustar_desde_frame(alto, id_iframe){
document.getElementById(id_iframe).style.height = alto + 'px';
}

//]]>
</script>

<script language="JavaScript">
 /* window.onbeforeunload = confirmExit;
  function confirmExit()
  {
    return "Ha intentado salir de esta pagina. Si ha realizado algun cambio en los campos sin hacer clic en el boton Guardar, los cambios se perderan. Seguro que desea salir de esta pagina? ";
  }*/

</script>
