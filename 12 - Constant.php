<?php  
// define('NAMA', "Muhammad Amirul");
// echo NAMA;
// echo "<br>";
// const UMUR = "21";
// echo UMUR;

// define tidak bisa disimpan di dalam class sedangkan const bisa disimpan didalam class
// class contohConstant{
// 	const NAMA = "Muhammad Amirul";
// }
// echo contohConstant::NAMA;

// constanta untuk menampilkan baris
// echo __LINE__;

// constanta untuk menampilkan Letak file
// echo __FILE__;

// constanta untuk menampilkan nama method
// function contoh()
// {
// 	return __FUNCTION__;
// }
// echo contoh();

// constanta untuk menampilkan nama class
class coba{
	public $kelas = __CLASS__;
}
$obj = new coba;
echo $obj->kelas;
?>