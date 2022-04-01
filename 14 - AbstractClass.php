<?php

// ini adalah class
abstract class Produk {
	// membuat variabel dalam class menggunakan visibility
	private $judul, $penulis, $penerbit, $harga, $diskon;
	// ini adalah constructor = method yang akan dijalankan pertama ketika class dipanggil
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	// membuat method atau function
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	abstract public function getInfoProduk();
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
	public function setJudul($judul){
		if (! is_string($judul)) {
			throw new Exception("Harus diisi dengan huruf", 1);
		}
		$this->judul = $judul;
	}
	public function getJudul(){
		return $this->judul;
	}
	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}
	public function getPenulis(){
		return $this->penulis;
	}
	public function setPenertbit($Penerbit){
		$this->Penerbit = $Penerbit;
	}
	public function getPenerbit(){
		return $this->Penerbit;
	}
	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}
	public function getDiskon($diskon){
		return $this->diskon;
	}
	public function setHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
}

class CetakInfoProduk {
	public $daftarProduk = [];
	public function tambahProduk( Produk $produk ){
		$this->daftarProduk[] = $produk;
	}
	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";
		foreach ( $this->daftarProduk as $p ) {
			$str .= "- {$p->getInfoProduk()} <br> ";
		}
		return $str;
	}
}

class Komik extends Produk{
	public $jmlHalaman;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk (){
		$str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public $jmlWaktuMain;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlWaktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlWaktuMain = $jmlWaktuMain;
	}
	public function getInfoProduk (){
		$str = "Game : ". $this->getInfo() ." ~ {$this->jmlWaktuMain} Jam.";
		return $str;
	}
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 35000, 50);

$cetakProduk = new CetakInfoProduk;
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();







?>