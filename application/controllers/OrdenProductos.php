
<?php
error_reporting(E_ALL ^ E_WARNING);
defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenProductos extends CI_Controller
{


    function __construct()
    {
        parent::__construct();

        /* Cargamos la base de datos */
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('utility_helper');
        $this->load->library('Grocery_CRUD');
        $this->load->library('session');
		$this->load->model('OrdenProductos_models');
    }

    function ordenAparicionPadre()
    {
        try{
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');

           // $crud->where('estado_artista',1);
            $crud->set_table('orden_apariciones');
            $crud->set_subject('Orden aparición');
            $crud->set_language('spanish');

            $crud->callback_column('Lista', array($this, 'list_subOrdenesBoton'));
            //$crud->callback_column('Agregar', array($this, 'agregarProductosBoton'));
            //$crud->callback_column('Quitar',array($this,'quitarProductosBoton'));
              //
            $crud->display_as('orden', 'Titulo de orden');
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('numero_aparicion', 'Orden de aparición');

            $crud->order_by('numero_aparicion','ASC');
            $crud->unset_delete();

            $crud->required_fields(
              'numero_aparicion',
                'orden',
              'descripcion'


            );
            $crud->columns(
                'numero_aparicion',
                'orden',
              'descripcion',
              'Lista'

            );



               $state = $crud->getState(); //obtener el estado
				$state_info=$crud->getStateInfo();


              // $crud->set_field_upload('foto_prensa_caratula','assets/uploads/prensa/caratulas_revistas');
               $output = $crud->render();
	          if($state == 'edit')
				{

						$primary_key = $state_info->primary_key;
						redirect('OrdenProductos/ordenAparicionPadreEdit/'.$primary_key);
				}
               if($state == 'add')
				{
						redirect('OrdenProductos/ordenAparicionPadreAdd');
				}

            $output->titulo ="Administración Catálogos";
            $output->subtitulo ="Orden de aparición de productos";
		    vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e)
        {
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }
    }
    function list_subOrdenesBoton($primary_key,$row){

         return '<a class="btn btn-default" href="'.base_url().'index.php/OrdenProductos/addSubOrdenProductos/'.$row->		id_orden_aparicion.'">Agregar lista específica</a>';
    }



    //************************************************************************************************************************
    //************************************************************************************************************************
    //************************************************************************************************************************
    //********************************Funciones para agregar y editar ordenamientos padre
    function ordenAparicionPadreAdd()
    {
        $data['tit'] ="Administración Catálogos";
        $data['sub'] ="Agregar nuevo orden de aparición padre";
        vista_crud_admin('ordenamientoPadre/add_ordenamientoPadre_view',$data);
    }
    function AddOrdenamientoPadre()
    {
       $ordenAparicion=$this->input->post('ordenAparicion');
       $descripcion=$this->input->post('descripcion');
       $titulo=$this->input->post('titulo');

       $TodosLosProductos = Array();
       $resp = $this->OrdenProductos_models->countVerificarValorOrdenamientoPadre($ordenAparicion);
       $form=array(
            'orden'=>$titulo,
            'descripcion'=>$descripcion,
            'numero_aparicion'=>$ordenAparicion
                   );
       if($resp>0)
       {
           $reordenar=$this->OrdenProductos_models->regresaRowOrdenamientoPadreRepetido($ordenAparicion);
           foreach($reordenar as $ordenPadre)
           {
              $ordenAparicionPadre=$ordenPadre->numero_aparicion+1;
              $updateform=array('numero_aparicion'=>$ordenAparicionPadre);
              $this->OrdenProductos_models->updateOrdenamientoPadre($ordenPadre->id_orden_aparicion,$updateform);
              //$updateformProductos=array('id_aparicion'=>$ordenAparicionPadre);
             // $this->OrdenProductos_models->updateOrdenamientoPadreProductos($ordenPadre->numero_aparicion,$updateformProductos);

              ///guarda todos los productos con su actalizacion
              $productosParaActualizar=$this->OrdenProductos_models->regresaProductosOrdenadosPadre($ordenPadre->numero_aparicion);
                foreach($productosParaActualizar as $producto)
                {
                    $TodosLosProductos[] = array(
                    'id_producto' =>$producto->id_producto,
                    'id_aparicion' =>$ordenAparicionPadre
                    );
                }
           }
            ///depues de guardar todos los productos gardarlos en la base de datos
            ////actualizar productos masivo
            foreach($TodosLosProductos as $productoA)
            {
               $updateformProductos=array('id_aparicion'=>$productoA['id_aparicion']);
                $idProducto=$productoA['id_producto'];
                $this->OrdenProductos_models->updateOrdenamientoProductos($idProducto,$updateformProductos);
            }
       }
        $this->OrdenProductos_models->saveNuevoOrdenamientoPadre($form);

    }


    ///funciones para editar orden aparicion padre
    function ordenAparicionPadreEdit($id)
    {
        if($id!='')
        {
            if(is_numeric($id))
            {
                if($id>0)
                {
                    $data['tit'] ="Administración Catálogos";
                    $data['sub'] ="Editar orden de aparición de productos";

                     $resultado= $this->OrdenProductos_models->consultarOrdenamiento($id);
                    $data['infoOrdenamiento'] = $resultado;
                    $this->session->set_userdata('Id_0rd3n4',base64_encode($id));
                    $this->session->set_userdata('num_0rd3n4',base64_encode($resultado->numero_aparicion));
                    vista_crud_admin('ordenamientoPadre/edit_ordenamientoPadre_view',$data);
                }else
                {
                     redirect('OrdenProductos/ordenAparicionPadre');
                }

            }else
            {
               redirect('OrdenProductos/ordenAparicionPadre');
            }

        }else
        {
            redirect('OrdenProductos/ordenAparicionPadre');
        }

    }
    function UpdateOrdenamientoPadre()
    {
       $ordenAparicion=$this->input->post('ordenAparicion');
       $descripcion=$this->input->post('descripcion');
       $titulo=$this->input->post('titulo');

        $idor=base64_decode($this->session->userdata('Id_0rd3n4'));
        $numeroOrdenamiento=base64_decode($this->session->userdata('num_0rd3n4'));

        $TodosLosProductos = Array();
        $listaProductos = Array();

        $productosParaActualizarOriginales=$this->OrdenProductos_models->regresaProductosOrdenadosPadre($numeroOrdenamiento);

        foreach($productosParaActualizarOriginales as $producto)
        {
            $listaProductos[] = array(
                'id_producto' =>$producto->id_producto,
                'id_aparicion' =>$ordenAparicion
                );
        }

        $resp=$this->OrdenProductos_models->countVerificarValorOrdenamientoEditPadre($ordenAparicion,$idor);
        if($resp>0)
        {
            $reordenar=$this->OrdenProductos_models->regresaRowOrdenamientoPadreRepetidoEdit($ordenAparicion,$idor);
            foreach($reordenar as $ordenPadre)
            {
              $ordenAparicionPadre=$ordenPadre->numero_aparicion+1;
              $updateform=array('numero_aparicion'=>$ordenAparicionPadre);
              $this->OrdenProductos_models->updateOrdenamientoPadre($ordenPadre->id_orden_aparicion,$updateform);
              //$updateformProductos=array('id_aparicion'=>$ordenAparicionPadre);
              //$this->OrdenProductos_models->updateOrdenamientoPadreProductos($ordenPadre->numero_aparicion,$updateformProductos);
              $productosParaActualizar=$this->OrdenProductos_models->regresaProductosOrdenadosPadre($ordenPadre->numero_aparicion);
              foreach($productosParaActualizar as $producto)
              {
                    $TodosLosProductos[] = array(
                    'id_producto' =>$producto->id_producto,
                    'id_aparicion' =>$ordenAparicionPadre
                    );
              }
            }
              ///depues de guardar todos los productos gardarlos en la base de datos
            ////actualizar productos masivo
            foreach($TodosLosProductos as $productoA)
            {
               $updateformProductos=array('id_aparicion'=>$productoA['id_aparicion']);
                $idProducto=$productoA['id_producto'];
                $this->OrdenProductos_models->updateOrdenamientoProductos($idProducto,$updateformProductos);
            }
        }

         $form=array(
            'orden'=>$titulo,
            'descripcion'=>$descripcion,
            'numero_aparicion'=>$ordenAparicion
                   );
        $this->OrdenProductos_models->updateOrdenamientoPadreEditar($form,$idor);
        //$formProductos=array('id_aparicion'=>$ordenAparicion);
        //$this->OrdenProductos_models->updateOrdenamientoProductosPadreEditar($formProductos,$numeroOrdenamiento);
          foreach($listaProductos as $productoA)
            {
               $updateformProductos=array('id_aparicion'=>$productoA['id_aparicion']);
                $idProducto=$productoA['id_producto'];
                $this->OrdenProductos_models->updateOrdenamientoProductos($idProducto,$updateformProductos);
            }

    }
    function quitarVariablesSesionPadre()
    {
        $this->session->unset_userdata('Id_0rd3n4');
        $this->session->unset_userdata('num_0rd3n4');
        redirect('OrdenProductos/ordenAparicionPadre');
    }
    //************************************************************************************************************************
    //************************************Funciones para vericar la existencia de un ordenamiento*****************************
    //************************************************************************************************************************
    //************************************************************************************************************************
    function verificarValorOrdenamientoPadre()
    {
        $ordenAparicion=$this->input->post('ordenAparicion');
        $resp = $this->OrdenProductos_models->countVerificarValorOrdenamientoPadre($ordenAparicion);
        echo $resp;
    }
    function verificarValorOrdenamientoEditPadre()
    {
        $numOrd=base64_decode($this->session->userdata('num_0rd3n4'));
        $id_ordenamientoPadre=base64_decode($this->session->userdata('Id_0rd3n4'));

        $ordenAparicion=$this->input->post('ordenAparicion');
        if($id_ordenamientoPadre!=''){
            $resp = $this->OrdenProductos_models->countVerificarValorOrdenamientoEditPadre($ordenAparicion,$id_ordenamientoPadre);
            echo $resp;
        }else
        {
            echo 0;
        }
    }


    //******************************************************************************************************************************
    //******************************************************************************************************************************
    //******************************************************************************************************************************
    //***********************************************Sub_Ordenamiento *************************************************************
    //******************************************************************************************************************************
    //******************************************************************************************************************************
    //******************************************************************************************************************************
    //******************************************************************************************************************************

    ///Crud de subOrdenamientos
    function addSubOrdenProductos()
    {
        if($this->uri->segment(3)==NULL)
        {
            echo '<script>
            window.parent.location.href="'.base_url().'index.php/OrdenProductos/ordenAparicionPadre";
            </script>';
        }else
        {
            $idOrden=$this->uri->segment(3);
            $data['tit'] ="Administración Catálogos";
            $data['sub'] ="Agregar sub ordenes de aparición";

            $DatosOrdenPadre=$this->OrdenProductos_models->regresaDatosOrdenPadre($idOrden);
            $this->session->set_userdata('num3ro_padre_0rd3n',$DatosOrdenPadre->numero_aparicion);
            $this->session->set_userdata('id_padre_0rd3n',$idOrden);
         try{
            // $idOrden1=$this->uri->segment(3);
            $crud = new Grocery_CRUD();
            $crud->set_theme('bootstrap');

            $crud->where('id_orden_aparicion',$idOrden);
            $crud->set_table('c3rb3r0_sub_orden_apariciones');
            $crud->set_subject('Lista de sub órdenes de la lista: '.$DatosOrdenPadre->orden);
            $crud->set_language('spanish');

            $crud->callback_column('Lista', array($this, 'viewListBoton'));
            $crud->callback_column('Agregar', array($this, 'agregarProductosBoton'));
            //$crud->callback_column('Quitar',array($this,'quitarProductosBoton'));

            $crud->display_as('orden', 'Titulo de orden');
            $crud->display_as('descripcion', 'Descripción');
            $crud->display_as('numero_aparicion', 'Orden de aparición');
            //$crud->field_type('id_orden_aparicion', 'hidden', $idOrden1);
            $crud->order_by('numero_aparicion','ASC');
            $crud->unset_delete();

            $crud->required_fields(
              'numero_aparicion',
                'orden',
              'descripcion'


            );
            $crud->columns(
                'numero_aparicion',
                'orden',
              'descripcion',
              'Lista',
              'Agregar'
              //'Quitar'

            );
            $state = $crud->getState(); //obtener el estado
            $state_info=$crud->getStateInfo();
		    $output = $crud->render();
            if($state == 'edit')
            {

				$primary_key = $state_info->primary_key;
				redirect('OrdenProductos/ordenAparicionHijoEdit/'.$primary_key);
            }
            if($state == 'add')
            {
				redirect('OrdenProductos/ordenAparicionHijoAdd');
            }

            $output->titulo ="Administración Productos";
            $output->subtitulo ="Agregar sub ordenes de aparición";
		    vista_crud_admin('principalAdmin',$output);
        }catch(Exception $e){
            show_error($e->getMessage().' --- '.$e->getTraceAsString());
        }

        }

    }
    function viewListBoton($primary_key,$row){

         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/listProductos/'.$row->numero_aparicion.'">Lista de productos agregados</a>';
    }
    function agregarProductosBoton($primary_key,$row){

         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/agregarProductos/'.$row->numero_aparicion.'">Agregar productos</a>';
    }
    function quitarProductosBoton($primary_key,$row){

         return '<a class="btn btn-default" href="'.base_url().'index.php/Admin/quitarProductos/'.$row->numero_aparicion.'">Quitar productos</a>';
    }

    //******************************************************************************************************************************
    //******************************************************************************************************************************
    //********************************Funciones para editar y agregar ordeamientos hijo ********************************************

    //************funcion para agregar un sub ordenamiento
    function ordenAparicionHijoAdd()
    {
        $data['tit'] ="Administración Catálogos";
        $data['sub'] ="Agregar nuevo sub orden de aparición de productos";
        $data['id_padre'] =$this->session->userdata('id_padre_0rd3n');
        vista_crud_admin('ordenamientoPadre/add_ordenamientoHijo_view',$data);
    }
    function verificarValorOrdenamientoHijo()
    {
        $ordenAparicion=$this->input->post('ordenAparicion');
        $id_padre=$this->session->userdata('id_padre_0rd3n');
        $resp = $this->OrdenProductos_models->countVerificarValorOrdenamientoHijo($ordenAparicion,$id_padre);
        echo $resp;
    }
     function AddOrdenamientoHijo()
    {
       $ordenAparicion=$this->input->post('ordenAparicion');
       $descripcion=$this->input->post('descripcion');
       $titulo=$this->input->post('titulo');
         $id_padre=$this->session->userdata('id_padre_0rd3n');

         $numOrdenamientoPadre=$this->session->userdata('num3ro_padre_0rd3n');
          $TodosLosProductos = Array();

       $resp = $this->OrdenProductos_models->countVerificarValorOrdenamientoHijo($ordenAparicion,$id_padre);


       if($resp>0)
       {
           $reordenar=$this->OrdenProductos_models->regresaRowOrdenamientoHijoRepetido($ordenAparicion,$id_padre);
           foreach($reordenar as $ordenHijo)
           {
              $ordenAparicionHijo=$ordenHijo->numero_aparicion+1;
              $updateform=array('numero_aparicion'=>$ordenAparicionHijo);
              $this->OrdenProductos_models->updateOrdenamientoHijo($ordenHijo->id_sub_orden_aparicion,$updateform);
              //$updateformProductos=array('id_sub_aparicion'=>$ordenAparicionHijo);
              ///cambiar funcion de ordenamiento productos
              // $this->OrdenProductos_models->updateOrdenamientoHijoProductos($ordenHijo->numero_aparicion,$updateformProductos);

               ///guarda todos los productos con su actalizacion
              $productosParaActualizar=$this->OrdenProductos_models->regresaProductosOrdenados($ordenHijo->numero_aparicion,$numOrdenamientoPadre);
                foreach($productosParaActualizar as $producto)
                {
                    $TodosLosProductos[] = array(
                    'id_producto' =>$producto->id_producto,
                    'id_sub_aparicion' =>$ordenAparicionHijo
                    );
                }
           }

           ///depues de guardar todos los productos gardarlos en la base de datos
            ////actualizar productos masivo
            foreach($TodosLosProductos as $productoA)
            {
               $updateformProductos=array('id_sub_aparicion'=>$productoA['id_sub_aparicion']);
                $idProducto=$productoA['id_producto'];
                $this->OrdenProductos_models->updateOrdenamientoProductos($idProducto,$updateformProductos);
            }



       }
           $form=array(
            'orden'=>$titulo,
            'descripcion'=>$descripcion,
            'numero_aparicion'=>$ordenAparicion,
            'id_orden_aparicion'=>$this->session->userdata('id_padre_0rd3n')
                   );

        $this->OrdenProductos_models->saveNuevoOrdenamientoHijo($form);

    }

    function ordenAparicionHijoEdit($id)
    {
        if($id!='')
        {
            if(is_numeric($id))
            {
                if($id>0)
                {
                    $data['tit'] ="Administración Catálogos";
                    $data['sub'] ="Editar sub orden de aparición de productos";

                     $resultado= $this->OrdenProductos_models->consultarOrdenamientoHijo($id);
                    $data['infoOrdenamiento'] = $resultado;
                     $data['id_padre'] =$this->session->userdata('id_padre_0rd3n');
                   //  $data['id_padre'] =$this->session->userdata('id_padre_0rd3n');
                    $this->session->set_userdata('Id_0rd3n4_hijo',base64_encode($id));
                    $this->session->set_userdata('num_0rd3n4_hijo',base64_encode($resultado->numero_aparicion));
                    vista_crud_admin('ordenamientoPadre/edit_ordenamientoHijo_view',$data);
                }else
                {
                     redirect('OrdenProductos/addSubOrdenProductos');
                }

            }else
            {
               redirect('OrdenProductos/addSubOrdenProductos');
            }

        }else
        {
            redirect('OrdenProductos/addSubOrdenProductos');
        }
    }
    function verificarValorOrdenamientoEditHijo()
    {
        $numOrd=base64_decode($this->session->userdata('num_0rd3n4_hijo'));
        $id_ordenamientoPadre=base64_decode($this->session->userdata('Id_0rd3n4_hijo'));
 $id_padre=$this->session->userdata('id_padre_0rd3n');
        $ordenAparicion=$this->input->post('ordenAparicion');
        if($id_ordenamientoPadre!=''){
            $resp = $this->OrdenProductos_models->countVerificarValorOrdenamientoEditHijo($ordenAparicion,$id_ordenamientoPadre,$id_padre);
            echo $resp;
        }else
        {
            echo 0;
        }
    }
    function UpdateOrdenamientoHijo()
    {
       $ordenAparicion=$this->input->post('ordenAparicion');
       $descripcion=$this->input->post('descripcion');
       $titulo=$this->input->post('titulo');

        //variables de session
        $idor=base64_decode($this->session->userdata('Id_0rd3n4_hijo'));
        $numeroOrdenamiento=base64_decode($this->session->userdata('num_0rd3n4_hijo'));
        $id_padre=$this->session->userdata('id_padre_0rd3n');
        $numOrdenamientoPadre=$this->session->userdata('num3ro_padre_0rd3n');

        $listaProductos = Array();
        $TodosLosProductos = Array();

        $datosOrdenamientoHijo=$this->OrdenProductos_models->regresarowOrdenados($idor);

        $productosParaActualizarOriginales=$this->OrdenProductos_models->regresaProductosOrdenados($datosOrdenamientoHijo->numero_aparicion,$numOrdenamientoPadre);

                foreach($productosParaActualizarOriginales as $producto)
                {
                    $listaProductos[] = array(
                    'id_producto' =>$producto->id_producto,
                    'id_sub_aparicion' =>$ordenAparicionHijo
                    );
                }

        ////buscar todos los productos que estan en la lista hijo







        $resp=$this->OrdenProductos_models->countVerificarValorOrdenamientoEditHijo($ordenAparicion,$idor,$id_padre);
        if($resp>0)
        {
            $reordenar=$this->OrdenProductos_models->regresaRowOrdenamientoHijoRepetidoEdit($ordenAparicion,$idor,$id_padre);
            foreach($reordenar as $ordenHijo)
            {
              $ordenAparicionHijo=$ordenHijo->numero_aparicion+1;
              $updateform=array('numero_aparicion'=>$ordenAparicionHijo);
              $this->OrdenProductos_models->updateOrdenamientoHijo($ordenHijo->id_sub_orden_aparicion,$updateform);
              //$updateformProductos=array('id_sub_aparicion'=>$ordenAparicionHijo);
              //$this->OrdenProductos_models->updateOrdenamientoHijoProductos($ordenHijo->numero_aparicion,$updateformProductos);
                 $productosParaActualizar=$this->OrdenProductos_models->regresaProductosOrdenados($ordenHijo->numero_aparicion,$numOrdenamientoPadre);
                foreach($productosParaActualizar as $producto)
                {
                    $TodosLosProductos[] = array(
                    'id_producto' =>$producto->id_producto,
                    'id_sub_aparicion' =>$ordenAparicionHijo
                    );
                }
            }

            ////actualizar productos masivo
            foreach($TodosLosProductos as $productoA)
            {
               $updateformProductos=array('id_sub_aparicion'=>$productoA['id_sub_aparicion']);
                $idProducto=$productoA['id_producto'];
                $this->OrdenProductos_models->updateOrdenamientoProductos($idProducto,$updateformProductos);
            }



        }

         $form=array(
            'orden'=>$titulo,
            'descripcion'=>$descripcion,
            'numero_aparicion'=>$ordenAparicion,
            'id_orden_aparicion'=>$this->session->userdata('id_padre_0rd3n')
                   );
        $this->OrdenProductos_models->updateOrdenamientoHijo($idor,$form);
        //$formProductos=array('id_sub_aparicion'=>$ordenAparicion);
        //$this->OrdenProductos_models->updateOrdenamientoHijoProductos($numeroOrdenamiento,$formProductos);
         foreach($listaProductos as $productoA)
            {
               $updateformProductos=array('id_sub_aparicion'=>$ordenAparicion);
                $idProducto=$productoA['id_producto'];
                $this->OrdenProductos_models->updateOrdenamientoProductos($idProducto,$updateformProductos);
            }
    }
    function quitarVariablesSesionHijo()
    {
        $this->session->unset_userdata('Id_0rd3n4_hijo');
        $this->session->unset_userdata('num_0rd3n4_hijo');
       // redirect('OrdenProductos/addSubOrdenProductos');
           echo '<script>
            window.parent.location.href="'.base_url().'index.php/OrdenProductos/addSubOrdenProductos/'.$this->session->userdata('id_padre_0rd3n').'";
            </script>';
    }




}

?>
