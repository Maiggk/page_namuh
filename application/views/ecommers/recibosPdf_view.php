<link href="<?php echo base_url(); ?>assets/tablas/select2.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url(); ?>assets/tablas/DT_bootstrap.css" rel="stylesheet" media="screen">









<section class="header-section fading-title parallax">
    <div class="section-shade sep-top-5x sep-bottom-3x">
      <div class="container">
        <div class="section-title upper light">
          <h2 class="small-space"><?php echo $tituloPago; ?></h2>
        </div>
      </div>
    </div>
 </section>

<div class="sep-top-2x">
        <div class="container">

          <div class="row">
            <div class="col-md-12">


                <h5 class="over-title margin-bottom-15">Registro de  <span class="text-bold">compras</span></h5>
                <p>
				    <a href="<?php echo base_url();?>index.php/metodoDePago" class="btn btn-green btn-xs">Regresar</a>
				</p>
                <div class="table-responsive">



                <table class="table table-striped table-bordered table-hover table-full-width" id="allRecibos">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Cantidad productos</th>
                        <th>Descripción</th>
                        <th>Monto total</th>

                        <th>Método pago</th>

                        <th>Estado Compra</th>
                        <th>Fecha creación</th>
                          <th>Pdf</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i=1;

                        foreach($recibos as $recibo)
                        {
                        ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $recibo->cantidad_productos; ?></td>
                            <td><?php echo $recibo->descripcion; ?></td>
                            <td><?php echo $recibo->monto_total; ?></td>

                            <td><?php echo $recibo->nombre_tipo_es; ?></td>
                            <td><?php echo $recibo->estado_compra; ?></td>
                            <td><?php echo $recibo->fecha; ?></td>
                               <td>
                                <?php
                                if($recibo->tipo_pago==2 || $recibo->tipo_pago==3)
                                {
                                echo '<a href="#" class="btn btn-primary btn-xs" onclick="visualizarPdf('.$recibo->id_compra.')" >
                                Recibo
                                </a>';
                                }else
                                {
                                    echo '<center>N/A</center>';
                                }
                               // echo $recibo->ruta_pdf;

                                ?>
                            </td>
                          </tr>
                       <?php
                            $i=$i+1;
                        }
                        ?>
                    </tbody>
                  </table>

                </div>




            </div>
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


<script src="<?php echo base_url(); ?>assets/tablas/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tablas/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/tablas/table-data.js"></script>
<script type="text/javascript">

    jQuery(document).ready(function() {

                $('#allRecibos').DataTable();
    });



    function visualizarPdf(IDArchivo)
    {
        if($.isNumeric(IDArchivo))
        {
             $.ajax({
                   type: "POST", //envia la posicion por metodo post de ajax
                   data:
                   {
                       archivo: IDArchivo
                   },
                    url:"<?= site_url('cargarComprobanteEs') ?>",
                   // url:base+"cargarComprobanteEs",
                    async: true,
                    success: function(response)
                    {
                        if($.isNumeric(response))
                        {
                            if(response==0)
                            {
                                parent.location.href="<?php echo base_url(); ?>index.php/comprobanteEspecifico";
                            }
                        }else
                        {

                        }

                    },
                    error: function (obj, error, objError){
                    alert("Error: " + objError);
                    }
                });

        }
    }
</script>
