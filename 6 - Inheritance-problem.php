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
		   $harga,
		   $jmlHalaman,
		   $jmlWaktuMain,
		   $tipe;

	// ini adalah constructor = method yang akan dijalankan pertama ketika class dipanggil
	public function __construct($tipe, $judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $jmlWaktuMain = 0)
	{
		# code...
		$this->tipe = $tipe;
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jmlWaktuMain = $jmlWaktuMain;
	}

	// membuat method atau function
	public function getLabel()
	{
		# code...
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap()
	{
		# code...
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if ($this->tipe == "Komik") {
			# code...
			$str .= " - {$this->jmlHalaman} Halaman.";
		} elseif ($this->tipe == "Game") {
			# code...
			$str .= " ~ {$this->jmlWaktuMain} Jam.";
		}
		return $str;
	}
	
}

class CetakInfoProduk {
	public function cetak( Produk $produk)
	{
		# code...
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}


$produk1 = new Produk("Komik", "Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0);
$produk2 = new Produk("Game", "Uncharted", "Neil Druckman", "Sony Computer", 35000, 0, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();











?>