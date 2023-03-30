<?php
require 'pegawai.php';

$pegawai1 = new Pegawai('01111','Andi','manager','muslim','menikah');
$pegawai2 = new Pegawai('01122','Abi','asisten manager','muslim','menikah');
$pegawai3 = new Pegawai('01133','Aziz','kepala bagian','non muslim','menikah');
$pegawai4 = new Pegawai('01144','Beni','staff','non muslim','belum menikah');
$pegawai5 = new Pegawai('01155','Dika','staff','muslim','menikah');
$pegawai6 = new Pegawai('01166','Lili','staff','non muslim','belum menikah');

$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5,$pegawai6];

foreach($ar_pegawai as $pegawai) {
    $pegawai->cetak();
} 
?>