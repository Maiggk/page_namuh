
      

      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space"><?php echo $nombre_album; ?></h2>
              <p class="lead">Postales</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      
        <!--Inicio sección del cuerpo-->
             <div class="sep-top-2x sep-bottom-md">
                    <div class="container">
                      <div class="row">
                    <div class="col-*-12" style="text-align:center">
                  <div class="form-group sep-top-xs">
                      <a href="<?php echo base_url(); ?>index.php/postales" class="btn btn-primary"><i class="fa fa-undo" ></i> &nbsp;Regresar álbums</a>
                  </div>
                                <br>
                    </div>
                        <div class="picture">
                          <?php foreach($imagenes_postal as $postal){ ?>
                            <div class="row" style="text-align:center">
                            <img class="col-*-12 img-responsive " src="<?php echo base_url(); ?>assets/uploads/postales/postales_albums/<?php echo $postal->ruta_imagen;?>">
                            </div>
                                <p style="text-align:justify"><?php echo $postal->pie_foto; ?></p>
                            <br>
                            <br>
                            <br>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                </div>

    


      
 

  

