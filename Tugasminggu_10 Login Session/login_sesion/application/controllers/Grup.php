<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grup extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('Grup_model');
	}

	
	public function tambah_grup(){
		
		$this->template->views('crud/tambah_grup');
	}

	
	public function input_grup(){
		$grup = $this->input->POST('nameGrup');

		
		$data = array(
		'grup' => $grup
	);
		 
		$this->Grup_model->input_data_grup($data, 'tm_grup');

		
		redirect('Grup');
	}

	
	public function index()
	{
		
		$data['admin'] = $this->Grup_model->getAllGrup()->result();
		
		$this->template->views('crud/master_grup',$data);
	}

	
	public function edit_grup($id)
	{
		
		$where = array('id_grup'=>$id);
	
		$data['admin'] = $this->Grup_model->edit_data_grup($where,'tm_grup')->result();
		
		$this->template->views('crud/edit_grup',$data);
	}

	
	public function update_grup()
	{
		$id = $this->input->POST('id');
		$grup = $this->input->POST('nameGrup');

		
		$data = array(
		'grup' => $grup
		);

		
		$where = array(
			'id_grup'=>$id
		);

		
		$this->Grup_model->update_data_grup($where,$data,'tm_grup');

		
		redirect('Grup');
	}

	
	public function hapus_grup($id)
	{
		
		$where = array('id_grup' => $id);
		
		$this->Grup_model->hapus_data_grup($where,'tm_grup');
		
		redirect('Grup');
	}


}