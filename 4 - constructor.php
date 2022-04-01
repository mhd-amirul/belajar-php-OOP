<?php

// Jualan Produk
// Komik
// Game

// ini adalah class
class Produk {
	// membuat variabel dalam class menggunakan visibility
	public $judul, 
		   $penulis,
		   $penerbit,
		   $harga;

	// ini adalah constructor = method yang akan dijalankan pertama ketika class dipanggil
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
	{
		# code...
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	// membuat method atau function
	public function getLabel()
	{
		# code...
		return "$this->judul, $this->penulis";
	}
	
}
$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shounen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 35000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : ".$produk1->getLabel();
echo "<hr>";
echo "Game : ".$produk2->getLabel();
echo "<hr>";
echo "Komik : ".$produk3->getLabel();







?>