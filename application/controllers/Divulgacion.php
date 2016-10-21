<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divulgacion extends CI_Controller {

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
		$this->load->model('Divulgacion_models');
    }
    
    
    
    
	public function arte()
	{
        $datos['prueba']="datos";
        
        ////crear matris bidimencional
         $GaleriaCompleta=array();
        $Artistas[]=array();
        $consultaArtistas=$this->Divulgacion_models->consultaArtistas();
         
         $i=0;
         for($i=0;$i<count($consultaArtistas);$i++)
         {
             $Artistas=$consultaArtistas[$i];
            // print();
            
             $consultarGaleriasArtistas=$this->Divulgacion_models->consultaGaleriaArtista($consultaArtistas[$i]->id_artista);
           
             $galerias=array();
             $j=0;
             
              for($j=0;$j<count($consultarGaleriasArtistas);$j++)
              {
                  
                  $galeria=$consultarGaleriasArtistas[$j];
           
                  $galerias[$j]['id_galeria']=$galeria->id_galeria_artista;
                  $galerias[$j]['foto']=$galeria->foto_ruta;
                  $galerias[$j]['detalles']=$galeria->detalles;
                  
              }
          // print_r($grupos);
             //   print_r($galeria);
             $GaleriaCompleta[$i]['galerias']=$galerias;
             $GaleriaCompleta[$i]['nombreCompleto']=$Artistas->nombreCompleto;
             $GaleriaCompleta[$i]['nombre_galeria']=$Artistas->nombre_galeria;
             $GaleriaCompleta[$i]['biografia']=$Artistas->biografia;
             $GaleriaCompleta[$i]['descripcion']=$Artistas->descripcion;
             $GaleriaCompleta[$i]['Id_artista']=$Artistas->id_artista;
         }
         $datos['Artistas']=$GaleriaCompleta;
        //////////////////////////////////////////
        
        
        
        
        vista_datos('divulgacion/arte_view',$datos);
	}
    
	public function prensa()
	{
        $datos['prueba']="datos";
		$datos['caratulas']=$this->Admin_models->trae_caratulas();
        vista_datos('divulgacion/prensa_view',$datos);
	}
    
	 function promocion()
	{

         $data['slides']= $this->Admin_models->traeSlides_promos();
		 $data['promociones']=$this->Divulgacion_models->obtener_promociones();

        
		
        vista_datos('divulgacion/promocion_view',$data);
	}
    
	 function blog()
	{
        $datos['prueba']="datos";
        vista_datos('divulgacion/blog_principal',$datos);
	}
    
	 function blog_detalle()
	{
        $datos['prueba']="datos";
        vista_datos('divulgacion/blog_detalle',$datos);
	}

    /* function none(){
     //   $this->output->enable_profiler('TRUE');
        echo '<script></script>';
    }*/
   
}

?>
