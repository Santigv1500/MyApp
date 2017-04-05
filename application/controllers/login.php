<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class login extends CI_Controller
{

	 var $datos;

	 function __construct(){
        parent::__construct(); 
        $this->datos['lista_usuarios'] = array(['nombre' => 'Juan','contraseña' => 'juanito123'],
			['nombre' => 'Luis','contraseña' => 'bermudez'],
			['nombre' => 'Laura','contraseña' => '12345678'],
			['nombre' => 'Sofia','contraseña' => '041234'],
			['nombre' => 'Andres','contraseña' => 'lobo']
			);
    }
	
	public function index()
	{
		if($this->session->has_userdata('username'))
		{
			$data = $this->session->all_userdata();
			$this->load->view('home',$data);
		}
		else{
			$this->load->view('login');
		}
		

	}

	public function attempt_login()
	{
			
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			foreach ($this->datos['lista_usuarios'] as $usuario)
			 {
				if ($username == $usuario['nombre'] && $password == $usuario['contraseña'])
				{
						$data = array(
		                   'username'  => $username,
		                   'password'     => $password,
		                   'logged_in' => TRUE
              			);

						$this->session->set_userdata($data);
						$this->load->view('home',$data);
						return;
				}
				
			}
			$data["username"] = $username;
			$data["error"] = "Usuario o contraseña incorrectos";
			$this->load->view('login',$data);		



	}

	public function logout()
	{

		$this->session->unset_userdata('username');
		$this->load->view('login');

	}

}









 ?>