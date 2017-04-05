<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class students extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->datos['estudiantes'] = 
	        array(['nombre' => 'Andres','apellidos' => 'Oviedo Castañeda','fecha_nacimiento' => '07/11/2001','sexo'=>'M',
	        	   'email' => 'anocas@unal.edu.co','semestre'=>'8'],
	        	   ['nombre' => 'Juan','apellidos' => 'Gomez Restrepo','fecha_nacimiento' => '12/02/1998','sexo'=>'M',
	        	   'email' => 'juangore@unal.edu.co','semestre'=>'9'],
	        	   ['nombre' => 'Luis','apellidos' => 'Bermudez Soto','fecha_nacimiento' => '15/03/2000','sexo'=>'M',
	        	   'email' => 'luisbeso@unal.edu.co','semestre'=>'5'],
	        	   ['nombre' => 'Laura','apellidos' => 'Saldarriaga Gomez','fecha_nacimiento' => '22/11/1995','sexo'=>'F',
	        	   'email' => 'lausalgo@unal.edu.co','semestre'=>'10'],
	        	   ['nombre' => 'Andrea','apellidos' => 'Miranda Vasquez','fecha_nacimiento' => '13/06/2002','sexo'=>'F',
	        	   'email' => 'anmirava@unal.edu.co','semestre'=>'2'],
	        	   ['nombre' => 'Mariana','apellidos' => 'Ruiz Mira','fecha_nacimiento' => '12/12/1998','sexo'=>'F',
	        	   'email' => 'mariruima@unal.edu.co','semestre'=>'1'],
	        	   ['nombre' => 'Julian','apellidos' => 'Mercedez Honda','fecha_nacimiento' => '09/07/1990','sexo'=>'M',
	        	   'email' => 'anocas@unal.edu.co','semestre'=>'10'],
	        	   ['nombre' => 'Maria Laura','apellidos' => 'Gomez Vasquez','fecha_nacimiento' => '01/01/1997','sexo'=>'F',
	        	   'email' => 'marilugo@unal.edu.co','semestre'=>'6'],
				);
    }

	public function index() {
		$data['estudiantes'] = $this->datos['estudiantes'];
		$this->load->view('students_list',$data);

	}

	

   

}