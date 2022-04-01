<?php

// ini adalah class
class Produk {
	// membuat variabel dalam class menggunakan visibility
	public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $jmlWaktuMain;
	// ini adalah constructor = method yang akan dijalankan pertama ketika class dipanggil
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jmlWaktuMain = $jmlWaktuMain;
	}
	// membuat method atau function
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
	}
}

class Komik extends Produk{	
	public function getInfoProduk (){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public function getInfoProduk (){
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->jmlWaktuMain} Jam.";
		return $str;
	}
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 35000, 0, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();











?>