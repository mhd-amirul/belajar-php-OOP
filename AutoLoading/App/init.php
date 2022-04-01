<?php 

// Pemanggilan class otomatis tanpa harus memanggilnya satu persatu
spl_autoload_register(function( $class ){
	require_once __DIR__ . '/Produk/' . $class . '.php';}
);