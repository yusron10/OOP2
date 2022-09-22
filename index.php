<?php 

// untuk menghubukan ke init.php

require_once 'App/init.php';

// New Yamaha di ambil dari nama kelas yang ada di Yamaha.php jika nama kelas di yamaha.php berbeda 


         // Maka nama File juga harus sama dengan class yang baru di ganti karena jika di lihat di init kita, kita memanggil Folder Peserta lalu cari nama class lalu di sambung dengan .php, jika nama class dengan nama file berbeda maka akan terjadi error. contoh tanda panah yang di bawah sayah
         //  ↙  
$m1 = new Yamaha ("Mio GT", "Putih");
$m2 = new Honda("Vario 125", "Merah");

// Mobil

$m3 = new Subaru("BRZ", "Biru");
$m4 = new Toyota("Rush", "Putih");


$m = new App();
$m->tambahMtr($m1);
$m->tambahMtr($m2);
$m->tambahMobil($m3);
$m->tambahMobil($m4);
echo $m->print();
echo "<br>";
echo $m->tempel();
echo "<br>";
echo "<br>";
echo "<br>";
echo "Proses : <br>";
$m1->speedUp();
echo "<br>";
$m1->speedUp();
echo "<br>";
$m1->speedUp();
echo "<br>";
$m1->speedUp();
echo "<br>";
echo $m1->getSpeed();
echo "<br>";
$m1->SpeedDown();
echo "<br>";
echo $m1->getSpeed();
echo "<br>";
echo $m1->hidupkan();
echo "<br>";
echo $m1->getInfoMotor();
echo "<br>";
echo $m2->hidupkan();
echo "<br>";
echo $m2->getInfoMotor();
echo "<br>";