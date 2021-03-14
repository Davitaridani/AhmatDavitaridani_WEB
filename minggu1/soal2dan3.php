<?php
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}

	public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaBaru*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaBaru= $this -> harga;
			$hargaBekas= ($hargaAwal*40)/100;
		}
		return $hargaBekas;
	}

}


$Xenia = new kendaraan ();
echo $Xenia -> jeniskendaraan="Jenis Kendaraan : Mobil Pribadi (Mobil)";
echo "<br>";
echo $Xenia -> namamerk=" NamaMerk : Xenia";
echo "<br>";
echo " Tahun pembuatan";
echo "<br>";
echo $Xenia -> tahunpembuatan=2008; 
echo "<br>";
echo " Bahan Bakar Yang Digunakan";
echo "<br>";
echo $Xenia -> bahanbakar="Premium";
echo "<br>";
echo " Harga Yang Dijual";
echo "<br>";
echo $Xenia -> harga="2000000"; echo " $";
echo "<br>";
echo " Harga Bekas atau Second";
echo "<br>";
echo $Xenia -> hargaSecond(); echo " $";
echo "<br>";


echo "Mendapat Subsidi ?";
echo $Xenia -> dapatSubsidi();
