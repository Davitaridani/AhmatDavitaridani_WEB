<?php 

	class Tugas3_minggu6 extends CI_Controller{
	public function index(){
		//c3 - memuat model 'Hello_model'
		$this->load->model('Tugas3_model');

		//pengembalikan objek dari kelas Heelo_model dan dimuat di var $model
		$model = $this-> Tugas3_model;

		//Mengambil data dari model
		$a = $model-> txt;

		//Membuat dat yang akan dikirim ke view
		$data['teks'] = $a;

		//memanggil file view
		$this->load->view('Tugas3_minggu6',$data);//file view
		}
	}


 ?>