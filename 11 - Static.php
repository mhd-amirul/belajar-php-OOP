<?php  

class contohStatic{
	public static $angka = 1;
	public static function halo(){
		return "Halo " . self::$angka++ . " Kali. <br>";
	}
}
// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();

$obj = new contohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new contohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>