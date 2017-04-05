<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class News extends CI_Controller
{


	public function index()
	{
		$this->load->model("News_model");
		$data["news"] = $this->News_model->get_all();
		$this->load->view("templates/header.html");
		$this->load->view("news/index",$data);
		$this->load->view("templates/footer.html");
	}

	 
	public function create()
	{
		$this->load->model("News_model");
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('text','Text','required');

		if ($this->form_validation->run() == FALSE){

			$this->load->view("templates/header.html");
			$this->load->view("news/create");
			$this->load->view("templates/footer.html");
		}
		else{
			$this->News_model->set_news();
			$this->load->view("news/success");
		}
		

	}

	public function show($id){
			$this->load->model("News_model");
			$data["new"] = $this->News_model->get_new($id);
			$this->load->view("templates/header.html");
			$this->load->view("news/show",$data);
			$this->load->view("templates/footer.html");
	}



}









 ?>