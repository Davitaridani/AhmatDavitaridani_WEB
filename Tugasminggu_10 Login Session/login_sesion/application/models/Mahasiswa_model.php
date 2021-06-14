<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Mahasiswa_model extends CI_Model {
	// idenfikasi variable
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Ahmat Davit Ari Dani","prodi"=>"MIF"],
			["nama"=>"Wahyu Putri Ani Winata","prodi"=>"TKK"],
			["nama"=>"Hanifah Hikmah","prodi"=>"TIF"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_mahasiswa;
	}

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup');
		$query = $this->db->get();//untuk mengembalikan  nilai dari variabel query
		return $query;
	}

	public function input_data($data,$table)//untuk memmanggil fungsi dari input data
	{
		$this->db->insert($table,$data);//berfungsi untuk menyimpan file input data
	}
	public function hapus_data($where,$table)
	{
		
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function login($user,$pass,$table) {
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$query = $this->db->get();
		return $query;
	}
	public function update_data($where,$data,$table){
		
		$this->db->where($where);
		
		$this->db->update($table,$data);
	}
}
?>