<?php 

/* Ini untuk memanggil class yang ada di folder peserta jadi bisa di baca seperti ini 
cari yang di request sama Index lalu cari di folder Peserta jika ketemu sambung dengan .php
semisal saya menjalankan class Yamaha maka di folder peserta akan di cari Yamaha lalu di tambah dengan .php dan menjadi Yamaha.php
*/

spl_autoload_register(function ($class) {
	require_once 'Peserta/' . $class . '.php';
}) ;

