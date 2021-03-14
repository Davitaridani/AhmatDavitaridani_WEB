<?php 
/**
 * 
 */
// soal 1
class Laptop
{
	// membuat properties dan method untuk soal 2 dan 3
	public $pemilik;
	public $merek;

	// membuat method untuk soal no 4
		public function hidupkan_laptop(){
		$keterangan = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// membuat method untuk soal no 3
	public function matikan_laptop(){
		$keterangan = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan;
	}

	// membuat method untuk soal no 6
	public function restart_laptop(){
		$keterangan1 = "Hidupkan Laptop ".$this->merek." punya ".$this->pemilik;
		$keterangan2 = "Matikan Laptop ".$this->merek." punya ".$this->pemilik;
		return $keterangan1.". ".$keterangan2;
	}

}
 // membuat 3 objek untuk soal no 7
$Agus= new Laptop();
$Budi= new Laptop();
$Reza= new Laptop();

// set value objek Davit
$Agus -> pemilik ='A';
$Agus -> merek ='Asus';

// set value objek Davit
$Budi -> pemilik ='B';
$Budi -> merek ='Acer';

// set value objek Davit
$Reza -> pemilik ='C';
$Reza -> merek ='Lenovo';

// memanggil dan eksekusi method 
echo $Agus-> hidupkan_laptop()."<br>";
echo $Budi-> matikan_laptop()."<br>";
echo $Reza-> restart_laptop()."<br>";

?>