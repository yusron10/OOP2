<?php 


class Honda extends Peserta implements InfoM{

	protected $merk,
	          $color;


	public function __construct($jenisM = 'jenisM' ,$color = 'color') {
		parent::__construct($jenisM);
		$this->color = $color;
	}


	public function getInfoM () {
		$a = __CLASS__ . " {$this->jenisM}";

		return $a;
	}

	public function setMotor($berapa) {
		$this->berapa = $berapa;
	}

	public function getInfoMotor() {
			return "Motor : " . __CLASS__ . " {$this->jenisM}" . " Warna " . $this->color;
	}
}