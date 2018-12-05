<?php 
	/**
	* Model donde se realiazaran las consultas a la base de datos y se envian los datos recibidos 
	*al controlador donde posteriormente se les da salida a una vista 
	*/
	class M_tienda extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function getCliente($correo,$clave){
			$this->db->where('Correo',$correo);
			$query = $this->db->get('clientes');

            $row = $query->row();

            if (isset($row)){
               $pass = $row->Password;

				if (crypt($clave, $pass) == $pass)
				    return $row;
				else
				    return FALSE; 
            }else{
            	return FALSE;
            }

		}
		
		function getArticulos($categoria){
            $this->db->where('IdCategoria',$categoria);
            $query = $this->db->get('articulos');

            return $query->result_array();
		}

		  
		  function altaUsuario($datos){
              $this->db->insert('clientes',$datos);
		  }	

		  function agrega($datos){
              $this->db->insert('comentarios',$datos);
		  }		

		  function gettodos(){
		  	  $query = $this->db->get('articulos');
        	  return $query->result_array();
		  }

	}	

 ?>