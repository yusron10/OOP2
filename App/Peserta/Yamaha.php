<?php 
/* Inhertince nah yang saya tandai adalah bentuk contoh inheritance yaitu memperluas Fungsional dengan parent nya jadi class child bisa menggunakan function yang ada di Class parent nya yaitu Peserta 
                ↙    */
class Yamaha extends Peserta implements InfoM {

	// Ini adalah atribut untuk menentukan apa yang akan kita buat

	protected $merk,
			  $color;

	public function __construct($jenisM = 'jenisM', $color = 'color') {

		/* Overriding adalah dimana kita bisa memberi nama sebuah method di class child dengan nama yang sama dengan parent maksud gini semisal di Parent nya ada Method Construct maka di class child bisa menggunakan nama construct juga tapi untuk menjalankan overriding kita menggunakan Parent:: 
		Parent:: untuk menyambungkan method yang sama di class child dengan class parent nah nnti param yang ada di Paretnnya harus di tulis jg contoh seperti tanda saya

		 ↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙↙*/
		parent::__construct($jenisM);
		$this->color = $color;
	}


	// Setter = Untuk men setting nilai 

	// Untuk code ini __CLASS__ berfungsi untuk mengambil nama class yang sedang di akses semisal kalian mengakses class yamaha maka kalian hanya perlu mengetik kan __CLASS__ untuk menampilkan Yamaha


	public function setMotor($berapa) {
		$this->berapa = $berapa;
	}


	// Getter Untuk mendapatkan Data ya cuman nama Class doang sih untuk membedakan getter mana setter ya bisa kalian Isi dengan sesuak kalian cuman biar gak bingung ya kasih getInfo biar tau getInfo ini untuk mendapatkan info 


	public function getInfoM() {
		$a = __CLASS__ . " {$this->jenisM}" . " ada {$this->berapa} Unit ";

		return $a;
	}


	public function getInfoMotor() {
		return "Motor : " . __CLASS__ . " {$this->jenisM}" . " Warna " . $this->color;
	}
}