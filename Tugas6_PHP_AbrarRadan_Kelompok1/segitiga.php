<?php
require_once 'abstract.php';
class Segitiga extends Bentuk2D {
    public $sisiA;
    public $sisiB;
    public $sisiC;
    public $alas;
    public $tinggi;

    public function __construct($sisiA,$sisiB,$sisiC,$alas,$tinggi) {
        $this->sisiA = $sisiA;
        $this->sisiB = $sisiB;
        $this->sisiC = $sisiC;
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        echo 'Segitiga';
    }

    public function luasBidang() {
        $luas_segitiga = 0.5 * $this->alas * $this->tinggi;
        return $luas_segitiga;
    }

    public function kelilingBidang() {
        $kel_segitiga = $this->sisiA + $this->sisiB + $this->sisiC;
        return $kel_segitiga;
    }
}
?>