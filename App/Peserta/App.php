<?php 

class App {
	public $lomba = array();

	public function tambahMtr( Peserta $peserta) {

	$this->finaslisMotor[] = $peserta;
}

public function print() {
	$c = "DAFTAR Motor : <br>";

	foreach ($this->finaslisMotor as $d) {
		$c .= "- {$d->getInfoM()} <br>";
	}

	return $c;
}
}