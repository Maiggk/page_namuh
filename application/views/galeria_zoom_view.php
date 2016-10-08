
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>
    <link href="<?php echo base_url(); ?>assets/css/photoswipe_master/default-skin/default-skin.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/photoswipe.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>assets/js/photoswipe_master/jquery.min.js"></script>
      
  </head>

  <body>
	
  
  <div class="container">

        <div class="row">

         
            <div class="picture col-lg-3 col-md-4 col-xs-6" >
            <?php foreach($IMG as $imagen) { ?>
            
             
                        <figure itemprop="associatedMedia" itemscope class="col-md-4">
                            <a href="<?php echo base_url();?>assets/uploads/productos/<?php echo $imagen->imagen;?>" itemprop="contentUrl" >
                                <img src="<?php echo base_url();?>assets/uploads/productos/<?php echo $imagen->imagen;?>" width="100">
                            </a>
                            
                            <br>
                            1dfrfrfrfrede<br>
                            2dedede<br>
                            3dedede<br>
                            4dedede
                            
                        </figure>
                 
            <?php } ?>
                </div>
     </div>
</div>

	      
          
          	
          	<!--<div class="row">
          		<div class="col-lg-12">
                  
                        <?php foreach($IMG as $imagen){ ?>
                              <div class="picture col-lg-3 col-md-4 col-xs-6" style="text-align:center">
                        <figure itemprop="associatedMedia" itemscope>
                            <a href="<?php echo base_url();?>assets/uploads/productos/<?php echo $imagen->imagen;?>" itemprop="contentUrl" >
                                <img src="<?php echo base_url();?>assets/uploads/productos/<?php echo $imagen->imagen;?>" width="100">
                            </a>
                            
                            <br>
                            1dede<br>
                            2dedede<br>
                            3dedede<br>
                            4dedede
                            
                        </figure>
                 <br>
                 <br>
                </div>
                        <?php } ?>
                     
                  
          		
          	 </div>
          	</div>-->
			
		
      
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
 
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
 
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

      <!--main content end-->
      <!--footer start-->

      <!--footer end-->
 
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/photoswipe_master/script-min.js"></script>
    


      
 

  </body>
</html>