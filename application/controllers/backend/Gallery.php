<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url','file', 'text'));
		$this->load->model('Resource');
		
		if($this->session->userdata('level') <> 'admin')
				{
					redirect('backend/login');
				}
	}
	protected $table = 'gallery'; 

	function index()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$data[$module] = $this->Resource->show($this->table)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/index',$data);
		$this->load->view('backend/template/footer');
	}
	function create()
	{
		$module = $this->table;
		$data['route'] = $this->table;
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/create',$data);
		$this->load->view('backend/template/footer');
	}
	function store()
	{
		
		$this->load->library('ciqrcode');

		$this->load->helper('url');

		$module = $this->table;
		$this->load->library('upload');
		$nmfile = "file_".time(); 
		$config['upload_path'] = './assets/uploads/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';  
		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		if($_FILES['image']['name'])
		{
			if ($this->upload->do_upload('image'))
			{
				$judul = $this->input->post('judul');
				$gbr = $this->upload->data();

				$data = array(
					'judul' => $judul,
					'image' =>$gbr['file_name'],
					'url_file' =>base_url('assets/uploads/').$gbr['file_name'],
				);

				//var_dump($data);
				$this->db->set('created_at', 'NOW()', FALSE);
			$this->Resource->store($data,$this->table);  
			} 
		}

		redirect('index.php/backend/'.$module.'/index');
	}
	function edit($id){ 
		$module = $this->table;
		$data['route'] = $this->table;
		$where = array('id' => $id);
		$data[$module] = $this->Resource->edit($where,$this->table)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/sidebar');
		$this->load->view('backend/modules/'.$module.'/edit',$data);
		$this->load->view('backend/template/footer');
	}
	function update(){
		$module = $this->table;
		$this->load->library('upload');
		$nmfile = "file_".time(); 
		$config['upload_path'] = './assets/uploads/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
		$config['file_name'] = $nmfile;
		$this->upload->initialize($config);
		
		
		if($_FILES['image']['name'])
		{
			if ($this->upload->do_upload('image'))
			{
				$id = $this->input->post('id');
				$judul = $this->input->post('judul');
				$gbr = $this->upload->data();
				// $data['image'] = $gbr['file_name'];
				// $data['url_file'] = base_url('assets/uploads/').$gbr['file_name'];
				$data = array(
					'judul' => $judul,
					'image' => $gbr['file_name'],
					'url_file' => base_url('assets/uploads/').$gbr['file_name'],
				);
				$where = array(
					'id' => $id
				);
				$this->db->set('updated_at', 'NOW()', FALSE);
				$this->Resource->update($where,$data,$this->table);
			} 
		}
		
		redirect('backend/'.$module.'/index');
	}
	function destroy ($id){ 
		$module = $this->table;
		$where = array('id' => $id);
		$this->Resource->destroy($where,$this->table);
		redirect('index.php/backend/'.$module.'/index'); 
	}
}