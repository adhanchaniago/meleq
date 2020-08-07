<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends CI_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file', 'text'));
		$this->load->model('Resource');
		
		
	}
    function index(){
        $post = $this->input->post();
        $query = "SELECT * FROM gallery";
        $data = $this->db->query($query)->result_array();
        header('Content-Type: application/json');

        echo json_encode($data);
    }
}