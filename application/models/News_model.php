
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class News_model extends CI_Model
{

	public $id = "";
	public $title = "";
	public $text = "";

	function __construct(){
        parent::__construct(); 
    }


    public function get_new($id){
        $query = $this->db->get_where('news', array('id' => $id));
        return $query->result();
    }


    public function get_all(){
    	$query = $this->db->get('news');
    	return $query->result();
    }

    public function set_news(){
        $data = array('title' => $this->input->post('title'),
                      'text' => $this->input->post('text')
                      );

        return $this->db->insert('news',$data);


    }



}


?>