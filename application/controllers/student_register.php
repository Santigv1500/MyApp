<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class student_register extends CI_Controller
{

	public function index(){
		$this->load->view('register_form');
	}

	public function attempt_register(){
		$data["success"] = true;
		$nombre = $this->input->post('nombre');
		$apellidos = $this->input->post('apellidos');
		$sexo = $this->input->post('sexo');
		$email = $this->input->post('email');
		$fecha_nacimiento = $this->input->post('fecha_nacimiento');

		if(empty($nombre) || empty($apellidos) || empty($sexo) || empty($email)){
			$data["error"] = "Por favor ingrese todos los campos obligatorios";
		}
		if(strlen($nombre) > 50){
			$data["error"] = "El Nombre no debe superar los 50 caracteres";			
		}
		if(strlen($apellidos) > 50){
			$data["error"] = "El apellido no debe superar los 50 caracteres";
		}		

		if($sexo != "Masculino" && $sexo != "Femenino"){
			$data["error"] = "El Sexo solo puede ser Masculino o Femenino";
		}

		if(isset($data["error"])){
			$data["success"] = false;
		}

		$this->load->view('register_form',$data);
	}
}