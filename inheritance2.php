<?php
class produk{
	public $namaBarang,
	   $merk, 
	   $harga,
	   $ukuranpakaian,
	   $penulis;

	public function getCetak(){
		return "$this->merk, (Rp $this->harga)";
	}
	public function __construct($namaBarang="nama barang",$merk="merk",$harga=0, $ukuranpakaian="ukuran Pakaian", $penulis="penulis"){
	$this->namaBarang =$namaBarang;
	$this->merk=$merk;
	$this->harga=$harga;
	$this->ukuranpakaian=$ukuranpakaian;
	$this->penulis=$penulis;
 	}

	public function cetakInfo(){
		$str="{$this->namaBarang}, {$this->getCetak()}";
		return $str;
		}
	}
	class pakaian extends produk{
		public function cetakInfo(){
			$str="Pakaian: {$this->namaBarang}, {$this->getcetak()} | Ukuran pakaian: {$this->ukuranpakaian}";
			return $str;
		}
	}
	class novel extends produk{
		public function cetakInfo(){
			$str="Buku: {$this->namaBarang}, {$this->getcetak()} | Penulis: {$this->penulis}";
			return $str;
		}
	}
$produk1 = new pakaian("Kemaja", "Gucci", 8000000, "L", "-");
$produk2 = new novel("Geez&Ann", "Gagas Media", 100000, "-", "Tsana(Rintik Sedu)");

echo $produk1->cetakInfo();
echo "<br>";
echo $produk2->cetakInfo();
echo "<br>";

?>