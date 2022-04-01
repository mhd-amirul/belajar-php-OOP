<?php 

class Game extends Produk implements infoProduk{
	public $jmlWaktuMain;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlWaktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlWaktuMain = $jmlWaktuMain;
	}
	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}
	public function getInfoProduk (){
		$str = "Game : ". $this->getInfo() ." ~ {$this->jmlWaktuMain} Jam.";
		return $str;
	}
}