<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_tienda');
	}

	public function index()
	{	
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('inicio');
		$this->load->view('assets/footer');
	}

	function vista(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('contacto');
		$this->load->view('assets/footer');
	}

	function personalizar(){				//Despliega vista de perzonaliza: el personalizar libretas
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('personaliza');
		$this->load->view('assets/footer');
	}
	function curso(){						//vista de cursos y talleres
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('cursos');
		$this->load->view('assets/footer');
	}
	function encuadernado(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('encuadernado');
		$this->load->view('assets/footer');
	}
	function editorial(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('editorial');
		$this->load->view('assets/footer');
	}
	function letras(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('letragrafico');
		$this->load->view('assets/footer');
	}

	function logueo(){   
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('login');
		$this->load->view('assets/footer');
		
	}

	function cancelar(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('login');
		$this->load->view('assets/footer');
	}

	function valida(){   
		$this->form_validation->set_rules('correo', 'Correo', 'valid_email|required');	
		$this->form_validation->set_rules('clave', 'Clave', 'trim|required');	

        if ($this->form_validation->run() == FALSE) {
            	$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('login');
				$this->load->view('assets/footer'); 
        }else{
			$correo = $this->input->post('correo');
			$clave = $this->input->post('clave');
			$res = $this->m_tienda->getCliente($correo,$clave);

			if (!isset($res)){
				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('login');
				$this->load->view('assets/footer');  
			}

			else{
				$this->session->set_userdata('usuario',$res);
				
				$this->load->view('assets/header');
				$this->load->view('assets/nav_bar');
				$this->load->view('inicio');
				$this->load->view('assets/footer');  
			}        	
        }
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}


	function vergaleria(){
			$datos['articulos'] = $this->m_tienda->gettodos();
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('galeria',$datos); 
			$this->load->view('assets/footer');  
	}

	function todospro(){

			$datos['articulos'] = $this->m_tienda->gettodos();
		    $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('galeria',$datos); 
			$this->load->view('assets/footer');  
	}

	function getArticulos($categoria){
		$this->session->set_userdata('categoria',$categoria);   // Almacenamos la categoria seleccionada en 
                                                                // la variable de sesion: categoria

		$articulos = $this->m_tienda->getArticulos($categoria); // Obtenemos todos los articulo de la categoria
        $data['articulos']=$articulos;

		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('galeria',$data); // Pasamos los articulo encontrados a la vista: galeria
		$this->load->view('assets/footer');
	}

function nvoUsuario(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('registro');
		$this->load->view('assets/footer');
	}


	function newUsuario(){

		$this->form_validation->set_rules('nom', 'Nombre completo', 'required');
		$this->form_validation->set_rules('correo', 'Correo', 'valid_email|required|is_unique[clientes.Correo]');	
		$this->form_validation->set_rules('clave', 'Clave', 'trim|required|matches[confclave]');
		$this->form_validation->set_rules('confclave', 'Confirmar clave', 'required');		

        if ($this->form_validation->run() == FALSE) {
	        $this->load->view('assets/header');
	        $this->load->view('assets/nav_bar');
	        $this->load->view('registro');
	        $this->load->view('assets/footer');
            
        } else {
          
			$mail = $this->input->post('correo');
			$nomb = $this->input->post('nom');
			$cve = $this->input->post('clave');

	        $datos['Nombre']   = $nomb;
	        $datos['Correo']   = $mail;

	        // Generamos un salt aleatoreo, de 22 caracteres para Bcrypt
	        $salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);

	        // A Crypt no le gustan los '+' así que los vamos a reemplazar por puntos.
			$salt = strtr($salt, array('+' => '.')); 

			// Generamos el password hash
			$datos['Password'] = crypt($cve, '$2y$10$' . $salt);
	        $this->m_tienda->altaUsuario($datos);
	        $this->load->view('assets/header');
	        $this->load->view('assets/nav_bar');
	        $this->load->view('login',array("mensaje"=>"Usuario agregado correctamente"));
	        $this->load->view('assets/footer');
        } // fin else
	}

	function vcon(){
		$this->load->view('assets/header');
		$this->load->view('assets/nav_bar');
		$this->load->view('contacto');
		$this->load->view('assets/footer');
	}

	function addcomentario(){
		$this->form_validation->set_rules('name', 'nombre', 'required');
		$this->form_validation->set_rules('email', 'correo', 'required');
		$this->form_validation->set_rules('message', 'mensaje', 'required');

        if ($this->form_validation->run() == FALSE)
        {		
	        $this->load->view('assets/header');
			$this->load->view('assets/nav_bar');
			$this->load->view('contacto');
			$this->load->view('assets/footer');
                
        }
        else
        {
			$datos['nombre']=$this->input->post("name");
			$datos['correo']=$this->input->post("email");
			$datos['mensaje']=$this->input->post("message");


		    $this->m_tienda->agrega($datos);
		   	$this->load->view('assets/header');
	        $this->load->view('assets/nav_bar');
	        $this->load->view('contacto',array("mensaje"=>"Mensaje enviado correctamente"));
	        $this->load->view('assets/footer');
	    }
	}

	// function enviar(){
	//   	 $config = array(
	// 	     'protocol' => 'smtp',
	// 	     'smtp_host' => 'smtp.googlemail.com',
	// 	     'smtp_user' => '', //Su Correo de Gmail Aqui
	// 	     'smtp_pass' => '', // Su Password de Gmail aqui
	// 	     'smtp_port' => '465',
	// 	     'smtp_crypto' => 'ssl',
	// 	     'mailtype' => 'html',
	// 	     'wordwrap' => TRUE,
	// 	     'charset' => 'utf-8'
	//      );
	// 	     $this->load->library('email', $config);
	// 	     $this->email->set_newline("\r\n");
	// 	     $this->email->from($this->input->post("email"));
	// 	     $this->email->subject('Mensaje de Pagina web');
	// 	     $this->email->message($this->input->post("message"));
	// 	     $this->email->to('');
	//      if($this->email->send(FALSE)){
	// 	     	$this->load->view('assets/header');
	// 	        $this->load->view('assets/nav_bar');
	// 	        $this->load->view('contacto',array("mensaje"=>"Mensaje enviado correctamente"));
	// 	        $this->load->view('assets/footer');
	//      }else {
	//      		$this->load->view('assets/header');
	// 	        $this->load->view('assets/nav_bar');
	// 	        $this->load->view('contacto',array("mensaje"=>"Fallo el Mensaje, no se envio correctamente"));
	// 	        $this->load->view('assets/footer');
	//      }
	// }
}
