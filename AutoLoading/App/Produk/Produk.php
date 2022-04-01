<?php 

abstract class Produk {
	protected $judul, $penulis, $penerbit, $harga, $diskon;
	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	abstract public function getInfo();
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