<?php 

	class Kalkulator{
	
	private $angka1 = 8;
	private $angka2 = 22;
	private $angka3 = 30;
	
		function tambah()
		{
			$hasil = $this -> angka1 + $this -> angka2;
			return $hasil = "".$this -> angka1." + ".$this -> angka2." = ".$hasil; 
		}
		
		function kurang()
		{
			$hasil = $this -> angka2 - $this -> angka3;
			return $hasil = "".$this -> angka2." - ".$this -> angka3." = ".$hasil; 
		}
		
		function bagi()
		{
			$hasil = $this -> angka3 / $this -> angka1;
			return $hasil = "".$this -> angka3." / ".$this -> angka1." = ".$hasil; 
		}
		
		function kali()
		{
			$hasil = $this -> angka3 * $this -> angka2;
			return $hasil = "".$this -> angka3." * ".$this -> angka2." = ".$hasil; 
		}
	} 
	//Membuat instance
	$tambah = new Kalkulator();
	$kurang = new Kalkulator();
	$bagi = new Kalkulator();
	$kali = new Kalkulator();

	//set value objek
	$hasil1=$tambah -> tambah();
	$hasil2=$kurang -> kurang();
	$hasil3=$bagi -> bagi();
	$hasil4=$kali -> kali();

	echo "Hasil Tambah : ".$hasil1."<br>";
	echo "Hasil Kurang : ".$hasil2."<br>";
	echo "Hasil Bagi : ".$hasil3."<br>";
	echo "Hasil Kali : ".$hasil4."<br>";
