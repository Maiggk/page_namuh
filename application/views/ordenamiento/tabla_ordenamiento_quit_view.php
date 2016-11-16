   <div class="table-responsive">
        <form id="productosPromocion" method="post">

            <table class="table table-bordered table-hover" >
            <thead>
            <tr>
                <th><center><font color="#909090"></center></font></th>

                <th ><center><font color="#909090">Código</center></font></th>
                <th ><center><font color="#909090">Producto</center></font></th>
                <th><center><font color="#909090">Descripción</center></font></th>
                <th><center><font color="#909090">Precio</center></font></th>

            </tr>
            </thead>
            <tbody>
            <?php
            $i=0;
            foreach($results as $producto){

            ?>
            <tr id="row<?php echo($i) ?>">
                <!-- Se un ciclo para poder mostrar los valores de las columnas de acuerdo a la consulta hecha en imprimibles-->
                <td style="width:10px;">

                    <label class="switch switch-success"><input style="display:block;" type="checkbox" id="folio<?php echo($i + 1) ?>"
                                                                name="productos[]"
                                                                value="<?php echo $producto->id_producto; ?> "/>

                        <span></span>
                    </label>

                </td>

                <td>
                    <center><?php echo $producto->codigo; ?></center>
                </td>
                <td>
                    <center><?php echo $producto->nombre; ?></center>
                </td>
                <td>
                    <center><?php echo $producto->descripcion; ?></center>
                </td>
                <td>
                    <center><?php echo '$'.decimales_ceros($producto->precio,2); ?></center>
                </td>

                <?php

                $i++;
                 }?>
            </tbody>

        </table>
            <center> <input class="btn btn-primary" id="productosFiltro"  type="submit"  value="Continuar"/><center> <br/><br/>
        </form>
    </div>
    <script>

         $('#productosFiltro').click(function() {
                    if ($('input[type="checkbox"]').is(':checked')) {
                        $('#productosPromocion').attr("action","<?php echo base_url();?>index.php/Ordenamiento/crearFiltradoProductosQuitOrdenamiento");
                    }
                    else {
                     //  alert('vacio');
                         sweetAlert('Error', 'Para continuar debes seleccionar almenos uno', 'error');
                        event.preventDefault();
                    }
                });

    </script>
