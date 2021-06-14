<?php 

class Grup_model extends CI_Model {
	
	public function get_data(){
		
		$data_mahasiswa = [
			["nama"=>"Ahmat Davit Ari Dani","prodi"=>"MIF"],
			["nama"=>"Budi Rohman","prodi"=>"TKK"],
			["nama"=>"Aji Sampurna","prodi"=>"TIF"]
		];
		
		return $data_mahasiswa;
	}
	
	public function getAllGrup(){
		
		$this->db->select('*');
		$this->db->from('tm_grup');
		$query = $this->db->get(); 
		return $query;
	}

	
	public function input_data_grup($data,$table)
	{
		
		$this->db->insert($table,$data);
	}

	
	public function edit_data_grup($where,$table){
		return $this->db->get_where($table,$where);
	} 

	
	public function update_data_grup($where,$data,$table){
		
		$this->db->where($where);
		
		$this->db->update($table,$data);
	}

	
	public function hapus_data_grup($where,$table)
	{
		
		$this->db->where($where);
		
		$this->db->delete($table);
	} 

}
?>