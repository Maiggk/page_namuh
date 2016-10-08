  

 <div class="form-group" style="text-align: center;">
     <label class="col-md-12 col-sm-12 control-label" for="textinput"><?php echo $Foto->codigo;?></label>
</div>
<div class="form-group" style="text-align: center;">
    <label class="col-md-12 col-sm-12 control-label" for="textinput"><?php echo $Foto->nombre;?></label> 
</div>
<div class="form-group" style="text-align: center;">
    <label class="col-md-12 col-sm-12 control-label" for="textinput"><?php echo $Foto->descripcion;?></label>
</div> 
   <div class="form-group" style="text-align: center;">
       <label class="col-md-12 col-sm-12 control-label" for="textinput">
           <?php echo '$ '.decimales_ceros($Foto->precio,2);?></label>
<!--</div> 
     
<div class="form-group">-->
                    <div class="col-md-12">
                       <img class="img-responsive" src="<?php echo base_url();?>assets/uploads/productos/<?php echo $Foto->imagen;?>" alt="">
                    </div>
</div>
