<?php 
	//Declare class
	class pilihJurusanMIPA {
		// properties
		public $Nama;
		public $Asal;
		public $kimia;
		public $fisika;
		public $inggris;
		public $biologi;
		public $matematika;

		// Membuat Fungsi untuk menentukan jurusan informatika
		public function informatika() {
			if ($this -> matematika > 85 && $this -> inggris > 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menentukan jurusan teknik
		public function MesinOtomotif() {
			if ($this -> fisika > 85 && $this -> matematika> 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menentukan jurusan kesehatan
		public function Agroindustri() {
			if ($this -> biologi > 85 && $this -> kimia > 85) {
				$hasil = "Rekomendasi";
			} else {
				$hasil = "Salah Jurusan";
			}
			return $hasil;
		}

		// Membuat Fungsi untuk menghitung rata rata 
		public function avg() {
			$a=$this -> kimia;
			$b=$this -> fisika;
			$c=$this -> inggris;
			$d=$this -> biologi;
			$e=$this -> matematika;
			$avg=($a+$b+$c+$d+$e)/5;
			return $avg;
		}

		// Membuat Fungsi untuk menentukan perkuliahan 
		public function univ($avg) {
			if ($avg>=85) {
				$hasil = "Politeknik Negeri Jember";
			} else if ($avg<85 && $avg>=75) {
				$hasil = "Univ Negeri";
			} else if ($avg<75) {
				$hasil = "Univ Swasta";
			}
			return $hasil;
		}

		
	}

	echo "<h1>Data dan Nilai</h1>";
	//Membuat instance
	$person = new pilihJurusanMIPA ();
	echo "Nama : ".$person -> nama="Ahmat Davit Ari Dani";
	echo "<br>";
	echo "Asal :".$person -> asal="Balung Jember";
	echo "<br>";
	echo "Nilai Matematika :" .$person -> matematika="90";
	echo "<br>";
	echo "Nilai Fisika :" .$person -> fisika="85";
	echo "<br>";
	echo "Nilai Kimia : " .$person -> kimia="89";
	echo "<br>";
	echo "Nilai Bhs. Inggris : " .$person -> inggris="87";
	echo "<br>";
	echo "Nilai Biologi : " .$person -> biologi="80";
	echo "<br>";
	
	echo "<h3>Jurusan Informatika </h3>";
	echo $person -> informatika();
	echo "<br>";
	echo "<h3>Jurusan Teknik </h3>";
	echo $person -> MesinOtomotif();
	echo "<br>";
	echo "<h3>Jurusan kesehatan </h3>";
	echo $person -> Agroindustri();
	echo "<br>";
	echo "<h4>Rata Rata</h4>";
	$avg=$person -> avg();
	echo $avg;
	echo "<br>";
	echo "<h4>Rekomendasi Sekolah :</h4>";
	echo $person -> univ($avg);
	echo "<br>";





 ?>