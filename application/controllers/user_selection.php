<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User_selection extends CI_Controller
{

	 
	public function index()
	{
		$this->load->model("User");
		$data["users"] = $this->User->get_all();
		$this->load->view("templates/header.html");
		$this->load->view("user_selection",$data);
		$this->load->view("templates/footer.html");
		

	}



}









 ?>