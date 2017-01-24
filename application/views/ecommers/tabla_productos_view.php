 <table id="allProductos" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Producto</th>
                                            <th>Descripción</th>
                                            <th>Cantidad</th>
                                            <th style="text-align: right;">Precio</th>
                                            <th style="text-align: right;">Total</th>
                                            <th style="text-align: right;">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=1;
                                    $pos=0;
                                    foreach($productos as $producto)
                                    { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $producto['nombre']; ?></td>
                                            <td><?php echo $producto['descripcion']; ?></td>
                                            <td><?php echo $producto['cantidad']; ?></td>
                                            <td style="text-align: right;">
                                                <?php echo decimales_ceros($producto['precio'],2); ?>
                                            </td>
                                            <td style="text-align: right;">
                                                <?php echo decimales_ceros($producto['total'],2); ?>
                                            </td>
                                            <td style="text-align: right;">
                                                <a href="#" class="btn btn-primary btn-xs"
                                                   onclick="EliminarProductoLista(<?php  echo $pos; ?>)">Eliminar</a>
                                            </td>
                                        </tr>
                                    <?php $i=$i+1;} ?>
                                    </tbody>
                                </table>
