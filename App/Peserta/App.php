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

public $mobil = array();

public function TambahMobil(Peserta $peserta) {
	$this->finaslisMobil[] = $peserta;
}

public function tempel() {
	$d = "Daftar Mobil : <br>";
	foreach ($this->finaslisMobil as $x) {
		$d .= "- {$x->getInfoM()} <br>";
	}

	return $d;
}

}