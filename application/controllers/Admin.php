<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	    function __construct(){

        parent::__construct();

        /* Cargamos la base de datos */
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('utility_helper');
        $this->load->library('Grocery_CRUD');
        $this->load->library('session');
		$this->load->model('Admin_models');
               $this->load->library('image_lib');
    }
    
    
    
    
	public function index()
	{
		//$data["results"] = $this->Busqueda_models->resumenArticulos();
		/*  $output->titulo ="Administración Catálogos";
            $output->subtitulo ="d"; */
		//vista_admin('principalAdmin');
        $this->productos();
	}
    function clasificacion()
    {
           try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
            $crud->where('estado_union',1);
            $crud->set_table('union_grupo_categoria');
            $crud->set_subject('Clasificación');
            $crud->set_language('spanish');
           
            $crud->display_as('id_categoria', 'categoría');
            $crud->display_as('id_grupo', 'Grupo');
            $crud->display_as('id_tipo', 'Tipo');
            $crud->display_as('id_producto', 'Producto');
               $crud->set_relation('id_categoria','categorias','categoria');
               $crud->set_relation('id_grupo','grupos','grupo');
               $crud->set_relation('id_tipo','tipos','tipo');
               $crud->set_relation('id_producto','productos','nombre');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
               
               
               
            $crud->unset_delete();
               $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarClasificacion'));
            $crud->required_fields(
              'id_producto',
              'id_categoria'
            );
            $crud->columns(
             'id_producto',
              'id_categoria',
              'id_grupo',
              'id_tipo',
              'acciones'
                
            );
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
               //$crud->set_field_upload('foto','assets/uploads/categoria');
               $output = $crud->render();
                if($state == 'edit')
				{
						
						$primary_key = $state_info->primary_key;
						redirect('Admin/formClasificacionEdit/'.$primary_key);
				}
               if($state == 'add')
				{
						
						//$primary_key = $state_info->primary_key;
						redirect('Admin/formClasificacionAdd');
				}
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Clasificación"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    
    
     function EliminarClasificacion($value,$row)
    {
           return '<a onclick="ValidarEliminarClasificacion('.$row->id_union_grupo_categoria.')"  class="btn btn-danger">Eliminar</a>';
    }
    
    
     //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////eleiminar elementos de un catalogo 
    function eliminarRow()
    {
        $id = $this->input->post('id');
        $opcion = $this->input->post('opcion');
        $nameTable="";
        $nameID="";
         $form=array();
      /*  if($opcion==1)
        {
            $nameTable="c3br0_punto_venta_productos";
            $nameID="id_producto";
            $form=array('estado_producto'=>0);
        }
        if($opcion==2)
        {
            $nameTable="c3br0_punto_venta_proveedores";
            $nameID="id_proveedor";
            $form=array('estado_proveedor'=>0);
        }
        if($opcion==3)
        {
            $nameTable="c3br0_punto_venta_inventario";
            $nameID="id_inventario";
            $form=array('estado_inventario'=>0);
        }
        if($opcion==4)
        {
            $nameTable="c3br0_punto_venta_kits";
            $nameID="id_kit";
            $form=array('estado_kit'=>0);
        }*/
        if($opcion==1)
        {
            $nameTable="union_grupo_categoria";
            $nameID="id_union_grupo_categoria";
            $form=array('estado_union'=>0);
        }
       /* if($opcion==6)
        {
            $nameTable="cursos";
            $nameID="idCursos";
            $form=array('estado'=>0);
        }
        if($opcion==7)
        {
            $nameTable="username";
            $nameID="idUsuario";
            $form=array('estatus'=>0);
        }*/
       
        $this->Admin_models->eliminarRowCatalogo($nameID,$id,$nameTable,$form);
        
    }
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////// funciones para editar y crear nuevos usuarios
    
    
    
    
    
    function formClasificacionEdit($id)
    {
       // $this->output->enable_profiler(TRUE);
         $data['categorias'] = $this->Admin_models->categorias();
        $data['productos'] = $this->Admin_models->productos();
        $data['idClass'] = $id;
       //$data['tipo'] = $this->Admin_models->consultaTipo($id);
        
              $data['tit'] = 'Administración Catálogos';
       $data['sub'] = 'Clasificación';
 
      //$data['product']=$this->Admin_models->clasificacionDatos($id);
      $data['product']=$this->Admin_models->clasificacionDatosCategoria($id);
      $data['grupo']=$this->Admin_models->clasificacionDatosGrupo($id);
      $data['tipo']=$this->Admin_models->clasificacionDatosTipo($id);
        //print_r($data['product']);
        //echo $id;
		vista_crud_admin('admin/clasificacionEdit_view',$data); 
    }
    function formClasificacionAdd()
    {
                 $data['tit'] = 'Administración Catálogos';
       $data['sub'] = 'Clasificación';
         $data['categorias'] = $this->Admin_models->categorias();
         $data['productos'] = $this->Admin_models->productos();
		vista_crud_admin('admin/clasificacionAdd_view',$data);
    }
    function regresarTipos()
    {
          $grupo = $this->input->get('grupo');
          $resp=$this->Admin_models->tipoGrupos($grupo);

         echo json_encode($resp);	
    }
    function guardarClasificacion()
    {
         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
         $producto=$this->input->post('producto');
         $form=array(

                        'id_tipo'=>$tipo, 
			            'id_grupo'=> $grupo,
			            'id_categoria'=> $categoria,
			            'id_producto'=> $producto
                    );
        $resp=$this->Admin_models->GuardarClasificacion($form);
    } 
    function updateClasificacion()
    {
 
         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
         $producto=$this->input->post('producto');
         $idClasi=$this->input->post('iDclass');
         $form=array(

                        'id_tipo'=>$tipo, 
			            'id_grupo'=> $grupo,
			            'id_categoria'=> $categoria,
			            'id_producto'=> $producto
                    );
        $resp=$this->Admin_models->updateClasificacion($idClasi,$form);
    }
    
    



     function productosGaleria()
    {

          try{
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');

           // $crud->where('estado',1);
            $crud->set_table('productos');
            $crud->set_subject('Productos');
            $crud->set_language('spanish');
               $crud->callback_column('acciones', array($this, 'galeriasProductos'));
            $crud->display_as('codigo', 'Código');
            $crud->display_as('nombre', 'Nombre');
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('precio', 'Precio');
            $crud->display_as('extra', 'Busqueda');
              //   $crud->set_relation('estado','estados','estado');
             // $crud->field_type('nuevo_precio', 'hidden', 0);
            //  $crud->field_type('porcentaje', 'hidden', 0);
            //  $crud->field_type('estado_promocion', 'hidden', 0);


			 //$crud->callback_column('eliminar',array($this,'EliminarArtista'));


            $crud->unset_delete();
            $crud->unset_edit();
            $crud->unset_add();

            $crud->columns(
             'codigo',
              'nombre',
              'descripcion',
              'precio',
                 'acciones'

            );



               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();
              // $crud->set_field_upload('imagen','assets/uploads/productos');
               $output = $crud->render();


            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Galeria Productos";
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }
     function galeriasProductos($primary_key,$row){

         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/productos_detalle/'.$row->id_producto.'">Agregar Fotografias</a>';
    }
       function EliminarGaleriaProductos($value,$row)
    {
           return '<a onclick="ValidarEliminarPermanentementeGaleriaProductos('.$row->id_producto.')"  class="btn btn-danger">Eliminar</a>';
    }
    function productos_detalle()
    {

    try{

                      if($this->uri->segment(3)==NULL){
                echo '<script>
                    window.parent.location.href="'.base_url().'index.php/Admin/productosGaleria";
                    </script>';
              }else{
                     $idProducto=$this->uri->segment(3);
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');

            $crud->where('id_producto',$idProducto);
            $crud->set_table('galeria_productos');
            $crud->set_subject('Galeria Productos');
            $crud->set_language('spanish');

            $crud->callback_column('eliminar',array($this,'EliminarGaleriaProductos'));

            $crud->display_as('ruta_foto', 'Foto');
            $crud->field_type('id_producto', 'hidden', $idProducto);

            $crud->unset_delete();

            $crud->required_fields(
              'ruta_foto'

            );
            $crud->columns(

              'ruta_foto','eliminar'
            );



               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();


               $crud->set_field_upload('ruta_foto','assets/uploads/galeria_productos');
               $output = $crud->render();


            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Galeria Productos";
		vista_crud_admin('principalAdmin',$output);
                     }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }





    function productos()
    {
        
          try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('productos');
            $crud->set_subject('Productos');
            $crud->set_language('spanish');
           
            $crud->display_as('codigo', 'Código');
            $crud->display_as('nombre', 'Nombre');
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('precio', 'Precio');
            $crud->display_as('extra', 'Busqueda');
                 $crud->set_relation('estado','estados','estado');
              $crud->field_type('nuevo_precio', 'hidden', 0);
              $crud->field_type('porcentaje', 'hidden', 0);
              $crud->field_type('estado_promocion', 'hidden', 0);
            $crud->display_as('imagen', 'Foto');
               $crud->callback_after_insert(array($this, 'crear_imagen_baja_resolucion'));
              $crud->callback_after_update(array($this, 'crear_imagen_baja_resolucion'));
            //$crud->set_relation('id_grupo','grupos','Grupo');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
  
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'codigo',
              'nombre',
              'descripcion',
              'precio',
              'extra','estado',
              'imagen'
          
            );
            $crud->columns(
             'codigo',
              'nombre',
              'descripcion','estado',
              'precio'
                
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
               $crud->set_field_upload('imagen','assets/uploads/productos');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Productos"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }
    function crear_imagen_baja_resolucion($post_array,$primary_key)
    {
        $producto=$this->Admin_models->producto_insertado($primary_key);

         $widthImage=getimagesize(base_url()."assets/uploads/productos/".$producto->imagen);
        $widthDefault=800;
        //$contante=10;
        //$var1=(int)$widthImage[0];
        //$var2=(int)$widthImage[1];
       // $x=$var1-$contante;
        //$y=$var2-$contante;
        $resultado=($widthDefault*$widthImage[1])/$widthImage[0];
        ini_set('memory_limit', '30M');
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/uploads/productos/'.$producto->imagen;
        $config['new_image'] = './assets/uploads/productos_baja_resolucion/'.$producto->imagen;
        $config['maintain_ratio'] = TRUE;
        $config['create_thumb'] = FALSE;
        $config['width'] = $widthDefault;
        $config['height'] =$resultado;
        //$config['quality']      = '90%';
//var_dump($config);
        $this->image_lib->initialize($config);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors('', '');
        }
        
 
        return true;
    }
    function categoria()
    {
          try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('categorias');
            $crud->set_subject('Categoría');
            $crud->set_language('spanish');
           
            $crud->display_as('categoria', 'Nombre Categoría');
            $crud->display_as('descripcion', 'Descripción');
                 $crud->set_relation('estado','estados','estado');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
               
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'categoria','estado'
          
            );
            $crud->columns(
             'categoria',
              'descripcion','estado'
                
            );
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
               //$crud->set_field_upload('foto','assets/uploads/categoria');
               $output = $crud->render();

               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Categorias"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
      
    }
     function EliminarCategoria($value,$row)
    {
           return '<a onclick="ValidarEliminarCategoria('.$row->id_categorias.')"  class="btn btn-danger">Eliminar</a>';
    }
    function grupo()
    {
           try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('grupos');
            $crud->set_subject('Grupo');
            $crud->set_language('spanish');
           
            $crud->display_as('grupo', 'Nombre Grupo');
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('id_categoria', 'categoría');
               $crud->set_relation('id_categoria','categorias','Categoria');
               $crud->set_relation('estado','estados','estado');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
               
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'grupo','estado'
          
            );
            $crud->columns(
             'grupo',
              'descripcion','estado',
              'id_categoria'
                
            );
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
               //$crud->set_field_upload('foto','assets/uploads/categoria');
               $output = $crud->render();

               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Grupos"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    function tipo()
    {
          try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('tipos');
            $crud->set_subject('Tipo');
            $crud->set_language('spanish');
           
            $crud->display_as('tipo', 'Nombre Tipo');
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('id_grupo', 'Grupo');
            $crud->set_relation('id_grupo','grupos','Grupo');
                 $crud->set_relation('estado','estados','estado');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
  
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'tipo','estado'
          
            );
            $crud->columns(
             'tipo',
              'descripcion',
              'id_grupo','estado'
                
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
               //$crud->set_field_upload('foto','assets/uploads/categoria');
               $output = $crud->render();
	           if($state == 'edit')
				{
						
						$primary_key = $state_info->primary_key;
						redirect('Admin/formTipoEdit/'.$primary_key);
				}
               if($state == 'add')
				{
						
						//$primary_key = $state_info->primary_key;
						redirect('Admin/formTipoAdd');
				}
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Tipos"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    
    function formTipoEdit($id)
    {
       $data['categorias'] = $this->Admin_models->categorias();
       $data['tipo'] = $this->Admin_models->consultaTipo($id);
       $data['estados'] = $this->Admin_models->consultaEstados();
       $data['tit'] = 'Administración Catálogos';
       $data['sub'] = 'Tipos';
		vista_crud_admin('admin/tipoEdit_view',$data); 
    }
     function formTipoAdd()
    {
        //vista('usuarios/userAdd_view');
       // $output->titulo ="Administración Catálogos";
        //$output->subtitulo ="Tipos"; 
         $data['estados'] = $this->Admin_models->consultaEstados();
            $data['tit'] = 'Administración Catálogos';
       $data['sub'] = 'Tipos';
        $data['categorias'] = $this->Admin_models->categorias();
		vista_crud_admin('admin/tipo_view',$data);
    }
    function regresarGrupos()
    {
         $categoria = $this->input->get('categoria');
          $resp=$this->Admin_models->grupos($categoria);

         echo json_encode($resp);	
    }
    function guardarTipo()
    {
         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $categoria=$this->input->post('categoria');
         $estado=$this->input->post('estado');
         $form=array(

                        'tipo'=>$tipo, 
			            'id_grupo'=> $grupo,
			            'id_categoria'=> $categoria,
			            'estado'=> $estado
                    );
        $resp=$this->Admin_models->GuardarTipo($form);
    }
    function updateTipo()
    {
         $tipo=$this->input->post('tipo');
         $grupo=$this->input->post('grupo');
         $IDtipo=$this->input->post('idTipo');
         $categoria=$this->input->post('categoria');
         $estado=$this->input->post('estado');
         $form=array(

                        'tipo'=>$tipo, 
			            'id_grupo'=> $grupo,
			            'id_categoria'=> $categoria,
			            'estado'=> $estado
                    );
        $resp=$this->Admin_models->updateTipo($IDtipo,$form);
    }

    
    /* Apartado de gestion de slides */
    
    
    function slides()
    {
        
          try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('slides_home');
            $crud->set_subject('Slides');
            $crud->set_language('spanish');
           $crud->set_relation('estado','estados','estado');
           $crud->callback_before_delete(array($this,'eliminar_imagen_slide'));
            //$crud->set_relation('id_grupo','grupos','Grupo');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
  
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'foto',
             /* 'descripcion',*/
              'estado'
            );
            $crud->columns(
             'foto',
              'descripcion',
              'estado'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
              
              
               $crud->set_field_upload('foto','assets/uploads/slides');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Slides <br><br>(Se recomienda subir archivos con resolución 2800x1565 aprox.)"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }


    }   
    
    function slidesInteriorismo()
    {
        
          try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('slides_interiorismo');
            $crud->set_subject('Slide Interiorismo');
            $crud->set_language('spanish');
           $crud->set_relation('estado','estados','estado');
           $crud->callback_before_delete(array($this,'eliminar_imagen_slide_interiorismo'));
            //$crud->set_relation('id_grupo','grupos','Grupo');
              /*
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
  
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'foto',
//              'descripcion',
              'estado'
            );
            $crud->columns(
             'foto',
//              'descripcion',
              'estado'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
              
              
               $crud->set_field_upload('foto','assets/uploads/slides_interiorismo');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Slides <br><br>(Se recomienda subir archivos con resolución 2800x1565 aprox.)"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }


    }   
    
    function eliminar_imagen_slide($primary_key){
        	$this->db->where('id_slides_home',$primary_key);
			$slide_img = $this->db->get('slides_home')->row();
			
			if(empty($slide_img)){
				return true;
			}else{
				unlink("assets/uploads/slides/".$slide_img->foto);
				return true;
			}
    }
    
    function eliminar_imagen_slide_interiorismo($primary_key){
        	$this->db->where('id_slides_interiorismo',$primary_key);
			$slide_img = $this->db->get('slides_interiorismo')->row();
			
			if(empty($slide_img)){
				return true;
			}else{
				unlink("assets/uploads/slides_interiorismo/".$slide_img->foto);
				return true;
			}
    }
	
	function users_namuh()
	{
	try{
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
            $crud->set_table('namuhdb_usuarios');
            $crud->set_subject('Usuarios');
            $crud->set_language('spanish');
            
			$crud->columns('nombre', 'ap_paterno', 'ap_materno', 'correo', 'username', 'telefono', 'direccion', 'estado_usuario');
			$crud->display_as('nombre', 'Nombre')
					->display_as('ap_paterno','Paterno')
					->display_as('ap_materno', 'Materno')
					->display_as('correo','E-mail')
					->display_as('username','Usuario')
					->display_as('telefono','Teléfono')
					->display_as('direccion','Dirección')
					->display_as('estado_usuario','Activo');
			$crud->fields('nombre', 'ap_paterno', 'ap_materno', 'correo', 'username', 'telefono', 'direccion', 'estado_usuario');
			$crud->field_type('estado_usuario','dropdown',array('0' => 'inactivo','1' => 'activo'));
            
			$crud->callback_column('estado_usuario', array($this,'estado_usuario'));
			
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_export();
			$crud->unset_print();
			$crud->unset_read();
            $state = $crud->getState(); //obtener el estado
			$state_info=$crud->getStateInfo();	
            $output = $crud->render();
	         
               
            $output->titulo ="Administración de Usuarios";
            $output->subtitulo =""; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

	}
	
	function estado_usuario($primary_key , $value)
	{
		if($value->estado_usuario=='0')
		{
			return '<a type="button" class="btn btn-success" href="'.base_url().'index.php/Admin/activa_user?key='.$value->id_usuario.'" >Activar</a>';
		}else{
			return '<a type="button" class="btn btn-warning" href="'.base_url().'index.php/Admin/invalida_user?key='.$value->id_usuario.'" >Desactivar</a>';
		}
	}
	
	
	function activa_user()
	{
		$id_user=$this->input->get('key');
		$data=array(
			'estado_usuario'=>1
		);
		$this->Admin_models->actualizarUser($id_user,$data);
		redirect('Admin/users_namuh');
	}
	
	function invalida_user()
	{
		$id_user=$this->input->get('key');
		$data=array(
			'estado_usuario'=>0
		);
		$this->Admin_models->actualizarUser($id_user,$data);
		redirect('Admin/users_namuh');
	}
    /*
    function slides()
    {
        
          try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('slides_home');
            $crud->set_subject('Slide');
            $crud->set_language('spanish');
           
            $crud->display_as('foto', 'Foto');
            $crud->display_as('descripcion', 'Descripción');
            $crud->set_relation('estado','estados','estado');
  
            $crud->unset_delete();
            $crud->required_fields(
              'foto',
              'estado'
            );
            $crud->columns(
             'foto',
              'descripcion','estado'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
               $crud->set_field_upload('foto','assets/uploads/slides');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Slides Home"; 
		vista_crud_admin('principalAdmin',$output);
              
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

    }*/
    
    function albums_postales(){
                  try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           // $crud->where('estado',1);
            $crud->set_table('albums_postales');
            $crud->set_subject('Álbum');
            $crud->set_language('spanish');
           //$crud->set_relation('estado','estados','estado');
           //$crud->callback_before_delete(array($this,'eliminar_imagen_slide'));
             $crud->callback_column('acciones', array($this, 'postales'));
            //$crud->set_relation('id_grupo','grupos','Grupo');
              /*
              
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('correo', 'E-mail');
            $crud->display_as('foto', 'Foto');
             $crud->field_type('estado', 'hidden', 1);*/
            //$crud->display_as('estado', 'Estado');
            $crud->field_type('nombre_album', 'string');
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'nombre_album',
              'caratula_album'
            );
            $crud->columns(
             'nombre_album',
              'caratula_album','acciones'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
              
              
               $crud->set_field_upload('caratula_album','assets/uploads/postales/album_caratulas');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Álbums postales"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    function postales($primary_key,$row){
        //return '<a type="button" class="btn btn-success" href="'.base_url().'index.php/Admin/activa_user?key='.$value->id_usuario.'" >Activar</a>';
         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/imagen_postales/'.$row->id_albums_postales.'">Agregar postales</a>';
    }
    
    function imagen_postales(){
        try{
              if($this->uri->segment(3)==NULL){
                echo '<script>
                    window.parent.location.href="'.base_url().'index.php/Admin/albums_postales";
                    </script>';
              }else{
               // $idAlbum=$this->uri->segment(3);


                  $idAlbum=$this->uri->segment(3);         

                $crud = new grocery_CRUD();

           /*bloque para traer el nombre del album */
              $nombre_album=$this->Admin_models->traeNombreAlbum($idAlbum);
               /*bloque para traer el nombre del album */            
                $crud->set_theme('bootstrap');

                $crud->where('id_album',$idAlbum);
                $crud->set_table('imagenes_postales');
                $crud->set_subject('Postales álbum: '.$nombre_album);
                $crud->set_language('spanish');
              // $crud->set_relation('estado_imagen','estados','estado');
               //$crud->callback_before_delete(array($this,'eliminar_imagen_slide'));
                        //  $crud->add_action('Agregar postales', '', '','ui-icon-plus',array($this,'album_postales'));
                //$crud->set_relation('id_grupo','grupos','Grupo');
                  /*

                $crud->display_as('descripcion', 'Descripción');
                $crud->display_as('correo', 'E-mail');
                $crud->display_as('foto', 'Foto');*/
                 $crud->field_type('id_album', 'hidden', $idAlbum);
                //$crud->field_type('estado_imagen','invisible');
                //$crud->display_as('estado', 'Estado');
                $crud->field_type('pie_foto', 'string');
                $crud->unset_delete();
                 /*
                 $crud->display_as('acciones', 'Acciones');
                   $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
                $crud->required_fields(
                  'pie_foto',
                  'ruta_imagen'
                );
                $crud->columns(
                 'pie_foto',
                  'ruta_imagen','estado_imagen'
                );

                  $state = $crud->getState(); //obtener el estado
                    $state_info=$crud->getStateInfo();	
                   //$crud->set_field_upload('foto','assets/uploads/categoria');
                 if($state=='add'){
                     $crud->field_type('estado_imagen', 'hidden', 2);
                 } 
                if($state=='list' || $state=='success' || $state =='edit' || $state=='read'){
                     $crud->set_relation('estado_imagen','estados','estado');
                 }


                   $crud->set_field_upload('ruta_imagen','assets/uploads/postales/postales_albums');
                   $output = $crud->render();


                $output->titulo ="Administración Catálogos";
                $output->subtitulo ="Álbum: ".$nombre_album; 
                vista_crud_admin('principalAdmin',$output);
              }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    
    
    function prensa_caratulas(){
        
                  try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
           
            $crud->set_table('prensa_caratulas');
            $crud->set_subject('Caratulas Prensa');
            $crud->set_language('spanish');
           
             $crud->callback_column('acciones', array($this, 'articulos'));
			 $crud->callback_column('eliminar',array($this,'boton_borrar_caratula'));
            
            
            $crud->field_type('nombre_album', 'string');
            $crud->unset_delete();
             
            $crud->required_fields(
              'descripcion',
              'foto_prensa_caratula'
            );
            $crud->columns(
             'descripcion',
              'foto_prensa_caratula','acciones','eliminar'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
              
              
               $crud->set_field_upload('foto_prensa_caratula','assets/uploads/prensa/caratulas_revistas');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Prensa"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    function articulos($primary_key,$row){
        //return '<a type="button" class="btn btn-success" href="'.base_url().'index.php/Admin/activa_user?key='.$value->id_usuario.'" >Activar</a>';
         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/prensa_articulos/'.$row->id_prensa_caratula.'">Agregar Artículo</a>';
    }
	 public function boton_borrar_caratula($value,$row)
	{
		return "<a class='btn btn-danger' href='".base_url('index.php/admin/borrar_caratula/'.$row->id_prensa_caratula)."'>Eliminar</a>";;
	}
	function borrar_caratula()
	{
		$this->load->database();
		$id=$this->uri->segment(3);
		$this->db->from('prensa_caratulas');
		$this->db->where('id_prensa_caratula',$id);
		$query = $this->db->get();
		$fila=$query->row();

		$ruta='assets/uploads/prensa/caratulas_revistas/'.$fila->foto_prensa_caratula;
		unlink($ruta);
		$this->db->delete('prensa_caratulas', array('id_prensa_caratula' => $id));
		redirect(base_url().'index.php/admin/prensa_caratulas');
	}
    
    function prensa_articulos(){
        try{
              if($this->uri->segment(3)==NULL){
                echo '<script>
                    window.parent.location.href="'.base_url().'index.php/Admin/prensa_articulos";
                    </script>';
              }else{

                  $idCaratula=$this->uri->segment(3);

                $crud = new grocery_CRUD();
           /*bloque para traer el nombre del album */
              $nombre_album=$this->Admin_models->traeNombreRevista($idCaratula);
               /*bloque para traer el nombre del album */            
                $crud->set_theme('bootstrap');
                $crud->where('id_prensa_caratula',$idCaratula);
				
                $crud->set_table('prensa_articulos');
                $crud->set_subject('Articulos Revista: '.$nombre_album);
                $crud->set_language('spanish');
				
				$crud->columns('descripcion', 'foto_prensa_articulo','eliminar');
				$crud->display_as('foto_prensa_articulo','Foto articulo');
				$crud->callback_column('eliminar',array($this,'boton_borrar_articulo'));
                 $crud->field_type('id_prensa_caratula', 'hidden', $idCaratula);

                $crud->field_type('descripcion', 'string');
				$crud->fields('descripcion',
                  'foto_prensa_articulo','id_prensa_caratula');
                $crud->unset_delete();

                $crud->required_fields(
                  'descripcion',
                  'foto_prensa_articulo'
                );

                  $state = $crud->getState(); //obtener el estado
                  $state_info=$crud->getStateInfo();	


                   $crud->set_field_upload('foto_prensa_articulo','assets/uploads/prensa/articulos_revistas');
                   $output = $crud->render();


                $output->titulo ="Administración Catálogos";
                $output->subtitulo ="Articulo: ".$nombre_album; 
                vista_crud_admin('principalAdmin',$output);
              }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    
    public function boton_borrar_articulo($value,$row)
	{
		return "<a class='btn btn-danger' href='".base_url('index.php/admin/borrar_articulo/'.$row->id_prensa_articulo)."'>Eliminar</a>";;
	}
    
	function borrar_articulo()
	{
		$this->load->database();
		$id=$this->uri->segment(3);
		$this->db->from('prensa_articulos');
		$this->db->where('id_prensa_articulo',$id);
		$query = $this->db->get();
		$fila=$query->row();

		$ruta='assets/uploads/prensa/articulos_revistas/'.$fila->foto_prensa_articulo;
		unlink($ruta);
		$this->db->delete('prensa_articulos', array('id_prensa_articulo' => $id));
		redirect(base_url().'index.php/admin/prensa_caratulas');
	}
    
    
    
     
    
    
    
     function artistas(){
        
                  try{           
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
            $crud->where('estado_artista',1);
            $crud->set_table('artistas');
            $crud->set_subject('Artistas');
            $crud->set_language('spanish');
           //$crud->set_relation('estado','estados','estado');
           //$crud->callback_before_delete(array($this,'eliminar_imagen_slide'));
            // $crud->callback_column('acciones', array($this, 'articulos'));
            //$crud->set_relation('id_grupo','grupos','Grupo');
            $crud->callback_column('acciones', array($this, 'galeriasArtista'));
			 $crud->callback_column('eliminar',array($this,'EliminarArtista'));
              
            $crud->display_as('nombreCompleto', 'Nombre completo del artista');
            $crud->display_as('nombre_galeria', 'Nombre de la galeria');
            $crud->display_as('biografia', 'Biografia');
            $crud->display_as('descripcion', 'Descripción');
             $crud->field_type('estado_artista', 'hidden', 1);
            //$crud->display_as('estado', 'Estado');
            //$crud->field_type('nombre_album', 'string');
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'nombreCompleto',
              'nombre_galeria',
              'biografia'
  
            );
            $crud->columns(
              'nombreCompleto',
              'nombre_galeria',
              'biografia',
              'descripcion',
              'acciones',
              'eliminar'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
              
              
              // $crud->set_field_upload('foto_prensa_caratula','assets/uploads/prensa/caratulas_revistas');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Artistas"; 
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }  
    function galeria_artistas(){
        
                  try{  
                      
                      if($this->uri->segment(3)==NULL){
                echo '<script>
                    window.parent.location.href="'.base_url().'index.php/Admin/artistas";
                    </script>';
              }else{
                     $idArtista=$this->uri->segment(3);       
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');
            
            $crud->where('id_artista',$idArtista);
            $crud->set_table('galeria_artistas');
            $crud->set_subject('Galeria artistas');
            $crud->set_language('spanish');
          // $crud->set_relation('id_artista','artistas','nombreCompleto');
           //$crud->callback_before_delete(array($this,'eliminar_imagen_slide'));
            // $crud->callback_column('acciones', array($this, 'articulos'));
            //$crud->set_relation('id_grupo','grupos','Grupo');
              $crud->callback_column('eliminar',array($this,'EliminarGaleria')); 
                
                      
            $crud->display_as('id_artista', 'Nombre Artista');
            $crud->display_as('foto_ruta', 'Foto');
            $crud->display_as('detalles', 'Detalle');
             
                      $crud->field_type('estado_galeria_artista', 'hidden', 1);
                      $crud->field_type('id_artista', 'hidden', $idArtista);
            //$crud->display_as('estado', 'Estado');
            //$crud->field_type('nombre_album', 'string');
            $crud->unset_delete();
             /*   $crud->display_as('acciones', 'Acciones');
               $crud->callback_column('acciones', array($this, 'EliminarCategoria'));*/
            $crud->required_fields(
              'foto_ruta'
  
            );
            $crud->columns(
            
              'foto_ruta',
              'detalles',
              'eliminar'
            );
              
			
            
               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();	
              
              
               $crud->set_field_upload('foto_ruta','assets/uploads/galeria_artistas');
               $output = $crud->render();
	         
               
            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Artistas"; 
		vista_crud_admin('principalAdmin',$output);
                      }
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    function eliminarPermanentemente()
    {
        $id=$this->input->post('id');    
        $opcion=$this->input->post('opcion');  
        
        if($opcion==1)
        {
            $galeria=$this->Admin_models->ConsultaGaleria($id);
            $ruta='assets/uploads/galeria_artistas/'.$galeria->foto_ruta;
		    unlink($ruta);
		    $this->db->delete('galeria_artistas', array('id_galeria_artista' => $id));
        }
        if($opcion==2)
        {
             $this->db->delete('artistas', array('id_artista' => $id));
            $this->db->delete('galeria_artistas', array('id_artista' => $id));
        }
        if($opcion==3)
        {
             $this->db->delete('galeria_productos', array('id_galeriaproductos' => $id));
            //$this->db->delete('galeria_artistas', array('id_artista' => $id));
        }
    }
      function galeriasArtista($primary_key,$row){
 
         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/galeria_artistas/'.$row->id_artista.'">Agregar Obras</a>';
    }
      function EliminarArtista($value,$row)
    {
           return '<a onclick="ValidarEliminarPermanentementeArtista('.$row->id_artista.')"  class="btn btn-danger">Eliminar</a>';
    }
       function EliminarGaleria($value,$row)
    {
           return '<a onclick="ValidarEliminarPermanentementeGaleria('.$row->id_galeria_artista.')"  class="btn btn-danger">Eliminar</a>';
    }
    
	function productos_arribos(){

                  try{
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');


            $crud->set_table('productos_arribos');
            $crud->set_subject('Arribos');
            $crud->set_language('spanish');

             /*$crud->callback_column('acciones', array($this, 'articulos'));
			 $crud->callback_column('eliminar',array($this,'boton_borrar_caratula'));*/


            // $crud->field_type('nombre_album', 'string');
            $crud->unset_delete();

            $crud->required_fields('nombre_arribo');
            $crud->columns('nombre_arribo');
		   $crud->set_field_upload('nombre_arribo','assets/uploads/divulgacion_arribos');
		   $crud->display_as('id_arribo','#');
		   $crud->display_as('nombre_arribo','Imagen Arribo');
		   $output = $crud->render();


            $output->titulo ="Administración Arribos";
            $output->subtitulo ="Nuevos Productos";
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }

	function promociones_carrusel(){

                  try{
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');


            $crud->set_table('promociones_carrusel');
            $crud->set_subject('Promociones');
            $crud->set_language('spanish');

            $crud->unset_delete();

            $crud->required_fields('imagen_promocion');
            $crud->columns('id_promocion', 'imagen_promocion', 'descripcion');
		   $crud->set_field_upload('imagen_promocion','assets/uploads/promociones');
		   $crud->display_as('id_promocion','Posición');
		   $crud->display_as('nombre_arribo','Imagen Promoción');
		   $output = $crud->render();


            $output->titulo ="Administración Promociones";
            $output->subtitulo ="Promociones";
		vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
}

?>
