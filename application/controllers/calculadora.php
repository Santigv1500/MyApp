<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calculadora extends CI_Controller {

	public function index() {

		$this->load->view('operaciones');

	}

	public function __construct() {
        parent::__construct();
    }

    public function calcular()
    {
    	$first_number = $this->input->post('first_number');
		$second_number = $this->input->post('second_number');

		if (($first_number <= 1001) and ($first_number >= (-1001))
		and ($second_number <= 1001) and ($second_number >= (-1001)))
		{
				if($this->input->post('sumar'))
		    	{
		    		$result = $first_number + $second_number;
					$data['result'] = $result;
				
		    	}
		    	elseif ($this->input->post('restar'))
		    	 {
		    		$result = $first_number - $second_number;
					$data['result'] = $result;
		    	}
		}
		else {
			$data['error'] = "Números fuera de rango";
		}

		$this->load->view('operaciones',$data);
    	
    }

}