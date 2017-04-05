<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class registro extends CI_Controller
{

	public function index(){



		if($this->input->post('registrar'))
		{
			$nombre = $this->input->post('nombre');
			$salario = $this->input->post('salario');
			$sexo = $this->input->post('sexo');

			if(empty($nombre) || empty($salario) || empty($sexo) )
			{
			
				$data['error'] = "Ingrese todos los campos";
			}
			else
			{
				$data['success'] = TRUE;
			}
			$this->load->view('registro',$data);
			return;

		}
		$this->load->view('registro');
		
		
		

	}
}


 ?>