<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');//berfungsi untuk memanggil file mahasiswa _model1.php yang terdapat di file model

	}

	public function tambah(){//berfungsi untuk memamnggil tambah pada template didalam view tambah mahasiswa
		$this->template->views('crud/tambah_mahasiswa');
	}

	public function input(){//memanggil fungsi input username, password , nama , grup
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array(//berfungsi untuk mendeklarasikan array data
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		$this->Mahasiswa_model->input_data($data, 'tm_user');//menginput data ke database dengan menggunakan mahasiswa_model
		redirect('Mahasiswa/index');//parameter yang bersisi data-data yang diinputkan
	}

	public function index()//untuk memanggil fuunsi index
	{
		$data['user'] = $this->Mahasiswa_model->getAll()->result();//untuk menyimpan data user untuk dipasangkan di view
		$this->template->views('crud/home_mahasiswa',$data);
	}
	public function Api(){
		$data = $this->Mahasiswa_model->getAll();
		echo json_encode($data->result_array());
	}
	public function ApiInsert(){
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$nama = $this->input->POST('nama');
		$grup = $this->input->POST('grup');

		
		$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		
		$this->Mahasiswa_model->input_data($data, 'tm_user');
		echo json_encode($array);
	}
	public function ApiDelete(){
		if ($this->input->POST('username')) {
			$where = array('username' => $this->input->POST('username'));
			if ($this->Mahasiswa_model->hapus_data($where,'tm_user')) {
				$array = array('succses' => true);
			} else {
				$array = array('eror' => true);
			}
			echo json_encode($array);
		}
	}
	public function ApiUpdate(){
		$id = $this->input->POST('id');
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$nama = $this->input->POST('nama');
		$grup = $this->input->POST('grup');

		// menyimpan data ke variabel $data dalam bentuk array
		$data = array(
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
		);

		// Menangkap id pada from
		$where = array(
			'id'=>$id
		);

		// Menangkap semua data untuk di olah pada fungsi update_data pada class Mahasiswa_model
		$this->Mahasiswa_model->update_data($where,$data,'tm_user');
		echo json_encode($array);
	}
}
