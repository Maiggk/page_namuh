<?php
class Admin_models extends CI_Model
{
      public function __construct() 
	{
        parent::__construct();
        $this->load->library('session');
      //  $this->load->model('catalogos/Catalogos_models');
    }
	
    
    function consultaGrupos($grupo) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('grupo');
        $this->db->from('grupos');
        $this->db->where('id_grupo',$grupo);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row()->grupo;
        return $resultado;
        
 }   
    function traeSlides() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        
        $this->db->from('slides_home');
        $this->db->where('estado',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 } 
    function traeSlides_promos() /*funcion para traer slides de arribos en promocion*/
 {

        $this->db->from('promociones_carrusel');
		$this->db->where('imagen_promocion !=',' ');
         $q = $this->db->get();
        $resultado = $q->result();

            return $resultado;



 }
    function traeSlidesInteriorismo() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        
        $this->db->from('slides_interiorismo');
        $this->db->where('estado',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }    
    function tipoGrupos($grupo) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('tipos');
        $this->db->where('id_grupo',$grupo);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }    
    function categorias() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('categorias');
       // $this->db->where('id_grupo',$grupo);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }   
    function clasificacionDatos($id) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('u.id_grupo');
        $this->db->from('union_grupo_categoria u');
         $this->db->join('grupos g', 'g.id_grupo=u.id_grupo');
         $this->db->join('categorias c', 'c.id_categorias=u.id_categoria');
         $this->db->join('tipos t', 't.id_tipo=u.id_tipo');
         $this->db->join('productos p', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_union_grupo_categoria',$id);
      ///$this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 }  

        function clasificacionDatosCategoria($id) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('union_grupo_categoria u');
         //$this->db->join('grupos g', 'g.id_grupo=u.id_grupo');
         $this->db->join('categorias c', 'c.id_categorias=u.id_categoria');
         //$this->db->join('tipos t', 't.id_tipo=u.id_tipo');
         $this->db->join('productos p', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_union_grupo_categoria',$id);
      ///$this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 } 
        function clasificacionDatosGrupo($id) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('union_grupo_categoria u');
         $this->db->join('grupos g', 'g.id_grupo=u.id_grupo');
         //$this->db->join('categorias c', 'c.id_categorias=u.id_categoria');
         //$this->db->join('tipos t', 't.id_tipo=u.id_tipo');
        // $this->db->join('productos p', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_union_grupo_categoria',$id);
      ///$this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 } 
         function clasificacionDatosTipo($id) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('union_grupo_categoria u');
         //$this->db->join('grupos g', 'g.id_grupo=u.id_grupo');
         //$this->db->join('categorias c', 'c.id_categorias=u.id_categoria');
         $this->db->join('tipos t', 't.id_tipo=u.id_tipo');
        // $this->db->join('productos p', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_union_grupo_categoria',$id);
      ///$this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 } 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function productos() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('productos');
       // $this->db->where('id_grupo',$grupo);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }  
    function consultaTipo($id) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        
        $this->db->select('t.id_tipo,t.tipo,t.descripcion,t.id_grupo,g.grupo,c.categoria,g.id_categoria,e.id_estado,e.estado');
        $this->db->from('tipos t');
         $this->db->join('grupos g', 'g.id_grupo=t.id_grupo');
         $this->db->join('categorias c', 'c.id_categorias=g.id_categoria');
         $this->db->join('estados e', 'e.id_estado=t.estado');
        $this->db->where('t.id_tipo',$id);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 }  
    function grupos($idCategoria) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('grupos');
        $this->db->where('id_categoria',$idCategoria);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 } 
    function GuardarTipo($form_datos) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->insert('tipos',$form_datos);
	   return $this->db->insert_id(); 
        
 } 
    function GuardarClasificacion($form_datos) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->insert('union_grupo_categoria',$form_datos);
	   return $this->db->insert_id(); 
        
 } 
    function updateTipo($tipo,$form) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
         $this->db->where('id_tipo',$tipo);

        $this->db->update('tipos',$form); 
        
 }   
    function updateClasificacion($class,$form) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
         $this->db->where('id_union_grupo_categoria',$class);

        $this->db->update('union_grupo_categoria',$form); 
        
 } 
      function eliminarRowCatalogo($nameID,$id,$nameTable,$form)
    {
        $this->db->where($nameID,$id);
        $this->db->update($nameTable,$form);
    }
    
    
function galeriaInicial() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('productos');
       //  $this->db->join('grupos g', 'g.id_grupo=t.id_grupo');
        // $this->db->join('categorias c', 'c.id_categorias=g.id_categoria');
    //    $this->db->where('t.id_tipo',$id);
      //  $this->db->limit(1);
     $this->db->where('imagen is not null');
         $this->db->where('estado',2);
    $this->db->order_by('id_aparicion', 'ASC');
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }
 function fotos_carrusel() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('productos_arribos');
       //  $this->db->join('grupos g', 'g.id_grupo=t.id_grupo');
        // $this->db->join('categorias c', 'c.id_categorias=g.id_categoria');
    //    $this->db->where('t.id_tipo',$id);
      //  $this->db->limit(1);
     $this->db->where('nombre_arribo is not null');
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;

 }
    function consultaCategorias() /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('categorias');
       //  $this->db->join('grupos g', 'g.id_grupo=t.id_grupo');
        // $this->db->join('categorias c', 'c.id_categorias=g.id_categoria');
      
         $this->db->where('estado',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }    
    function consultaGrupos1($idcategoria) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('grupos');
       //  $this->db->join('grupos g', 'g.id_grupo=t.id_grupo');
        // $this->db->join('categorias c', 'c.id_categorias=g.id_categoria');
       $this->db->where('id_categoria',$idcategoria);
         $this->db->where('estado',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }    
    function consultaTipos($idcategoria,$idgrupo) /*funcion para traer el id del usuario que inteneta ingresar*/
 {
        $this->db->select('*');
        $this->db->from('tipos');
       //  $this->db->join('grupos g', 'g.id_grupo=t.id_grupo');
        // $this->db->join('categorias c', 'c.id_categorias=g.id_categoria');
       $this->db->where('id_categoria',$idcategoria);
       $this->db->where('id_grupo',$idgrupo);
       $this->db->where('estado',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }      
    function consultaEstados() 
 {
        $this->db->select('*');
        $this->db->from('estados');

      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }    
    
    function consultaImgGrupo($idcategoria,$idgrupo)
 {
        $this->db->select('*');

         $this->db->from('productos p');
        $this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_categoria',$idcategoria);
       $this->db->where('u.id_grupo',$idgrupo);
       $this->db->where('p.imagen is not null');
         $this->db->where('p.estado',2);
         $this->db->where('u.estado_union',1);
         $this->db->order_by('p.id_aparicion', 'ASC');
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }     
    function consultaImgCategorias($idcategoria)
 {
        $this->db->select('*');
        $this->db->from('productos p');
        $this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_categoria',$idcategoria);
        $this->db->where('p.imagen is not null');
         $this->db->where('p.estado',2);
          $this->db->where('u.estado_union',1);
       $this->db->order_by('p.id_aparicion', 'ASC');
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 }  
    function consultaImgTipo($tipo,$grupo,$categoria)
 {
        $this->db->select('*');
        $this->db->from('productos p');
        $this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
        $this->db->where('p.imagen is not null');
        $this->db->where('p.estado',2);
       $this->db->where('u.id_categoria',$categoria);
       $this->db->where('u.id_grupo',$grupo);
       $this->db->where('u.id_tipo',$tipo);
          $this->db->where('u.estado_union',1);
         $this->db->order_by('p.id_aparicion', 'ASC');
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
 } 
      function consultaImgProducto($producto)
 {
        $this->db->select('*');
        $this->db->from('productos p');
        //$this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
        $this->db->where('p.imagen is not null');

       $this->db->where('p.id_producto',$producto);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 } 
    ///////////////////////////////////
       function countConsultaImgGrupo($idcategoria,$idgrupo)
 {
        $this->db->select('count(*) as total');

         $this->db->from('productos p');
        $this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_categoria',$idcategoria);
       $this->db->where('u.id_grupo',$idgrupo);
             $this->db->where('u.estado_union',1);

         $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
        
 }     
    function countConsultaImgCategorias($idcategoria)
 {
       $this->db->select('count(*) as total');
        $this->db->from('productos p');
        $this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_categoria',$idcategoria);
          $this->db->where('u.estado_union',1);
         $q = $this->db->get();
       $resultado = $q->row()->total;
        return $resultado;
        
 }  
    function countConsultaImgTipo($tipo,$grupo,$categoria)
 {
       $this->db->select('count(*) as total');
        $this->db->from('productos p');
        $this->db->join('union_grupo_categoria u', 'p.id_producto=u.id_producto');
       $this->db->where('u.id_categoria',$categoria);
       $this->db->where('u.id_grupo',$grupo);
       $this->db->where('u.id_tipo',$tipo);
          $this->db->where('u.estado_union',1);
         $q = $this->db->get();
       $resultado = $q->row()->total;
        return $resultado;
        
 } 

	////vericar que el correo no exista
    function countCorreos($correo)
    {
        $this->db->select('count(correo) as total');
		$this->db->from('namuhdb_usuarios');
         $this->db->where('correo',$correo);
		$q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
  function saveUsers($form_datos)
    {
       	$this->db->insert('namuhdb_usuarios',$form_datos);
	   return $this->db->insert_id(); 
    }
      function consultarUsuario($idusuario)
	 {
		 $this->db->select('count(*) as total');
	   $this->db->from('namuhdb_usuarios');
	   $this->db->where('id_usuario',$idusuario);
	   //$this->db->limit(1);
 
        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
	 }

     function consultarUsuarioDatosGeneral($idusuario)
	 {
		 $this->db->select('*');
	   $this->db->from('namuhdb_usuarios');
	   $this->db->where('id_usuario',$idusuario);
	   //$this->db->limit(1);

        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
	 }

 function actualizarUser($idUsuario,$data)
    {
         $this->db->where('id_usuario',$idUsuario);
        $this->db->update('namuhdb_usuarios',$data);
    }
    
     function verificarExistenciaUsuarioEmail($email)
    {
           $this->db->select('count(*) as total');
	   $this->db->from('namuhdb_usuarios');
	   $this->db->where('correo',$email);
	   //$this->db->limit(1);
 
        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
      function regresaUsuarioEmail($email)
    {
           $this->db->select('*');
	   $this->db->from('namuhdb_usuarios');
	   $this->db->where('correo',$email);
	   //$this->db->limit(1);
 
        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }
    function insertarPassTemp($Id,$formD)
    {
         $this->db->where('id_usuario',$Id);
        $this->db->update('namuhdb_usuarios',$formD);
    }
    
	    function verificarExistenciaUsuarioCodigo1($codigo,$usuario)
    {
           $this->db->select('count(*) as total');
	   $this->db->from('namuhdb_usuarios');
	   $this->db->where('correo',$usuario);
	   $this->db->where('passwordTemp',$codigo);
	   //$this->db->limit(1);
 
        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
    function verificarExistenciaUsuarioCodigo($usuario)
    {
           $this->db->select('count(*) as total');
	   $this->db->from('namuhdb_usuarios');
	   $this->db->where('correo',$usuario);
	   //$this->db->where('passwordTemp',$codigo);
	   //$this->db->limit(1);
 
        $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;
    }
    function actualizarUserPass($user,$data)
    {
             $this->db->where('correo',$user);
        $this->db->update('namuhdb_usuarios',$data);
    }
    
    
    /* Inicio sección administración de postales */
        function traeNombreAlbum($idAlbum) 
    {  
            $this->db->from('albums_postales');
            $this->db->where('id_albums_postales',$idAlbum);
            $q = $this->db->get()->row()->nombre_album;
            return $q; 
    } 
        function trae_albums() 
    {
        
        $this->db->from('albums_postales');
       // $this->db->where('estado',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
    }      
    
    function trae_postales($idAlbum) 
    {
        
        $this->db->from('imagenes_postales');
        $this->db->where('id_album',$idAlbum);
       $this->db->where('estado_imagen',2);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
        
    }    
    function trae_nombre_album($idAlbum) 
    {
        
        $this->db->from('albums_postales');
        $this->db->where('id_albums_postales',$idAlbum);
      //  $this->db->limit(1);
         $q = $this->db->get()->row()->nombre_album;
        
        return $q;
        
    } 
    /* Fin sección administración de postales */
    
        /* Inicio sección administración de prensa*/
        function traeNombreRevista($idCaratula) 
    {  
            $this->db->from('prensa_caratulas');
            $this->db->where('id_prensa_caratula',$idCaratula);
            $q = $this->db->get()->row()->descripcion;
            return $q; 
    } 
    
    function trae_caratulas()
    {
     
	 $this->db->select('pc.id_prensa_caratula, pc.descripcion, pc.foto_prensa_caratula,pa.descripcion,pa.foto_prensa_articulo ');
     $this->db->from('prensa_caratulas pc');
	 $this->db->join('prensa_articulos pa','pc.id_prensa_caratula=pa.id_prensa_caratula');
     // $this->db->limit(1);
     $q = $this->db->get();
     $resultado = $q->result();
     return $resultado;
        
    }

    /* Fin sección administración de postales */
    
    
    
    
    
    
    function ConsultaGaleria($idGaleria)
 {
        $this->db->select('*');
        $this->db->from('galeria_artistas');
       $this->db->where('id_galeria_artista',$idGaleria);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 }
    function ConsultaGaleriaProductos($id_galeriaproductos)
 {
        $this->db->select('*');
        $this->db->from('galeria_productos');
       $this->db->where('id_galeriaproductos',$id_galeriaproductos);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;

 } 
    function verificarExistenciaProductos($id)
 {
        $this->db->select('count(*) as total ');
        $this->db->from('productos');
       $this->db->where('id_producto',$id);
         $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;

 }

    
    
      function producto_insertado($idGrupo)
 {
        $this->db->select('*');
        $this->db->from('productos');
       $this->db->where('id_producto',$idGrupo);
      //  $this->db->limit(1);
         $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
        
 }  
    function consultaProductoDetalles($idProducto)
    {
        $this->db->select('*');
        $this->db->from('galeria_productos');
        $this->db->where('id_producto',$idProducto);

        $q = $this->db->get();
        $resultado = $q->result();
        return $resultado;
    }
    
/*inicio seccion datos detalle de productos*/

           function traeNombreProducto($idProducto)
    {
            $this->db->from('productos');
            $this->db->where('id_producto',$idProducto);
            $q = $this->db->get()->row()->nombre;
            return $q;
    }

/*fin seccion datos detalle de productos*/
    
    
    
    


function countVerificarValorOrdenamiento($numOrdenamiento)
 {
        $this->db->select('count(*) as total ');
        $this->db->from('orden_apariciones');
       $this->db->where('numero_aparicion',$numOrdenamiento);
         $q = $this->db->get();
        $resultado = $q->row()->total;
        return $resultado;

 }
    function saveNuevoOrdenamiento($form)
    {
        $this->db->insert('orden_apariciones',$form);
	    return $this->db->insert_id();
    }

    function consultarOrdenamiento($id)
    {
        $this->db->select('*');
        $this->db->from('orden_apariciones');
        $this->db->where('id_orden_aparicion',$id);

        $q = $this->db->get();
        $resultado = $q->row();
        return $resultado;
    }



    function updateOrdenamiento($form,$idor)
    {
             $this->db->where('id_orden_aparicion',$idor);
        $this->db->update('orden_apariciones',$form);
    }
    function updateOrdenamientoProductos($form,$idor)
    {
             $this->db->where('id_aparicion',$idor);
        $this->db->update('productos',$form);
    }

}
?>
