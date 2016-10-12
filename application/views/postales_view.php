
      <!-- Start header Section-->
      <section class="header-section fading-title parallax">
        <div class="section-shade sep-top-5x sep-bottom-3x">
          <div class="container">
            <div class="section-title upper light">
              <h2 class="small-space">Namuh Travel</h2>
              <p class="lead">Álbums</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      
        <!--Inicio sección del cuerpo-->
             <div class="sep-top-2x sep-bottom-md">
                    <div class="container">
                      <div class="row">
                          <?php 
                          $j=1;
                          //for($i=1;$i<=6;$i++){ 
                          foreach ($albums as $album){?>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 sep-bottom-lg">
                            <a href="<?php echo base_url();?>index.php/postales/album/<?php echo $album->id_albums_postales; ?>" class="product-image outline-outward">
                                <img src="<?php echo base_url(); ?>assets/uploads/postales/album_caratulas/<?php echo $album->caratula_album; ?>" alt="" class="img-responsive">
                            </a>
                          <div class="product-title">
                              <p class="upper" style="text-align:center"><?php echo $album->nombre_album; ?></p>

                          </div>
                        </div>  
                            <?php if($j%2==0){ ?>
                                <div class="clearfix vivisible-lg" style="z-index:-1"></div>
                            <?php } ?>
                          <?php $j=$j+1;} ?>
                      </div>
                    </div>
            </div>
        <!--Fin sección del cuerpo-->
