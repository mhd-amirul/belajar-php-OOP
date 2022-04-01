<?php

// Jualan Produk
// Komik
// Game

// ini adalah class
class Produk {
	// membuat variabel dalam class menggunakan visibility
	public $judul = "Judul", 
		   $penulis = "Penulis",
		   $penerbit = "Penerbit",
		   $harga = 0;

	// membuat method atau function
	public function getLabel()
	{
		# code...
		return "$this->judul, $this->penulis";
	}
	
}

// ini adalah objek
// $produk1 = new Produk();
// menimpa isi variabel
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// menambah variabel baru 
// $produk2->tambahProperty = "Game";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 35000;

echo "Komik : ".$produk3->getLabel();
echo "<hr>";
echo "Game : ".$produk4->getLabel();







?>