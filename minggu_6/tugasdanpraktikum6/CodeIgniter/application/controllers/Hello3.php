<?php
class Hello3 extends CI_Controller{
	public function index(){
		//c3 - memuat model 'Hello_model'
		$this->load->model('Hello_model');

		//pengembalikan objek dari kelas Heelo_model dan dimuat di var $model
		$model = $this->Hello_model;

		//Mengambil data dari model
		$a = $model->txt;

		//Membuat dat yang akan dikirim ke view
		$data['teks'] = $a;

		//memanggil file view
		$this->load->view('helloview', $data);//file view
	}
}


?>