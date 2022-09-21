<?php 
/*Jadi Abstract class adalah untuk mendefinisikan interface pada kelas lain yang menjadi turunannya, memiliki 1 method abstrak, berperan sebagai Kerangka dasar untuk kelas turunannya 

NOTE : 
		Kelas abstrak tidak bisa di instansiasi */


abstract class Peserta {

	/* Visibility adalah acces modifer maksudnya adalah kita bisa melindungi atau mempublik suatu atribut atau properti yang sudah di ketik
	Protected = Hanya bisa di gunakan dalam kelas turunan nya
	Private  =  di gunakan dalam kelas tertentu saja
	Public = bisa di gunakan di mana saja

	  ↙↙↙↙↙ ↙↙↙↙↙*/
	protected $jenisM;    //Atribut atau Property
	 private $speed = 0;    //Atribut atau Property

	// Constructor

	public function __construct($jenisM) {
		$this->jenisM = $jenisM;
	}

	// Setter = untuk Mensetting Sebuah isi 

	public function setSpeed($speed) {
		$this->speed = $speed;
	}


	// Method adalah function di dalam Class , bisa di liat ini di class peserta mempunya function getMerk dan ini biasanya di sebut METHOD,

	// ↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙
	public function getMerk() {
		$this->merk;
	}

	public function getColor() {
		$this->color;
	}

	public function getJenisMotor() {
		return "$this->jenisM";
	}

	public function Hidupkan() {
		return "Masukan Kunci Ke {$this->jenisM}" ;
	}

	public function SpeedUp() {
		$speed = $this->speed + 1;
		if ($speed <= 7) {
			echo "Kecepatan Bertambah Hati-Hati !";
			$this->speed = $speed;
		} else {
			echo "Kecepatan Sudah Maksimal";
		}
	}


	public function getSpeed() {
		return "Kecepatan " . "$this->jenisM " . $this->speed . " km/h ";
	}

	public function SpeedDown() {
		$speed = $this->speed - 1;
		if ($speed >= 0) {
			echo "Kecepatan Berkurang";
			$this->speed = $speed;
		} else {
			echo "Terlalu Pelan GK sampai-Sampai !";
		}
	}


	// Dan ini adalah method abstrak
	
	abstract public function getInfoM();
}