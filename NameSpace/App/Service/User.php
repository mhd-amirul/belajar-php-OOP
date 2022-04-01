<?php namespace App\Service;

//menambahkan namespace untuk class yang memiliki nama sama

class User{
	
	function __construct()
	{
		echo "Ini adalah class " . __CLASS__;
	}
}