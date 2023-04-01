<?php
require_once 'abstract.php';
class Lingkaran extends Bentuk2D {
    public $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        echo 'Lingkaran';
    }

    public function luasBidang() {
        $luas_lingkaran = 3.14 * $this->jari2 * $this->jari2;
        return $luas_lingkaran;
    }

    public function kelilingBidang() {
        $kel_lingkaran = 2 * 3.14 * $this->jari2;
        return $kel_lingkaran;
    }
}
?>