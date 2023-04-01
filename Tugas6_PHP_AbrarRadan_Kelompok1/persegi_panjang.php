<?php
require_once 'abstract.php';
class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct($panjang,$lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        echo 'Persegi Panjang';
    }

    public function luasBidang() {
        $luas_pp = $this->panjang * $this->lebar;
        return $luas_pp;
    }

    public function kelilingBidang() {
        $kel_pp = 2 * ($this->panjang + $this->lebar);
        return $kel_pp;
    }
}
?>