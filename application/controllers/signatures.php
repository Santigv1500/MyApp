<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signatures extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->datos['profesores'] = 
	        array(['nombre' => 'Juan','apellidos' => 'Gonzales Vega','departamento' => 'Seminarios'],
				['nombre' => 'Sebastian','apellidos' => 'Gomez Vasquez','departamento' => 'Matematicas'],
				['nombre' => 'Luisa','apellidos' => 'Castañeda Arevalo','departamento' => 'Ciencia de los Datos']
				);
         $this->datos['cursos'] =
          array(['codigo' => '12345','nombre' => 'Seminario 2','aula' => '202','profesor'=>$this->datos['profesores'][0]],
				['codigo' => '67890','nombre' => 'Calculo 1','aula' => '301','profesor'=>$this->datos['profesores'][1]],
				['codigo' => '09876','nombre' => 'Calculo 2','aula' => '216','profesor'=>$this->datos['profesores'][1]],
				['codigo' => '78935','nombre' => 'Calculo 3','aula' => '222','profesor'=>$this->datos['profesores'][1]],
				['codigo' => '02876','nombre' => 'Estadistica 1','aula' => '302','profesor'=>$this->datos['profesores'][2]]
			);
    }

	public function index() {
		$data['cursos'] = $this->datos['cursos'];
		$this->load->view('signatures_list',$data);

	}

	

   

}