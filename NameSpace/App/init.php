<?php 

// Pemanggilan class otomatis tanpa harus memanggilnya satu persatu
spl_autoload_register(function( $class ){
	// untuk mengambil nama class dengan cara memisahkannya ddengan direktori
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Produk/' . $class . '.php';}
);

spl_autoload_register(function( $class ){
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Service/' . $class . '.php';}
);