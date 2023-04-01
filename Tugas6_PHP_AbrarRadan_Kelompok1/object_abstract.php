<style>
table {
    border-collapse: collapse;
    border: 3px solid black;
}
th, td {
    border-collapse: collapse;
    border: 3px solid black;
    padding: 10px;
    font-size: 20px;
}
</style>
<?php
require_once 'lingkaran.php';
require_once 'persegi_panjang.php';
require_once 'segitiga.php';

$lingkaran = new Lingkaran(11);
$luas_lingkaran = $lingkaran->luasBidang();
$kel_lingkaran = $lingkaran->kelilingBidang();

$persegi_panjang = new PersegiPanjang(10,40);
$luas_pp = $persegi_panjang->luasBidang();
$kel_pp = $persegi_panjang->kelilingBidang();

$segitiga = new Segitiga(5,5,5,15,25);
$luas_segitiga = $segitiga->luasBidang();
$kel_segitiga = $segitiga->kelilingBidang();
?>

<table>
    <tr> 
        <th> Nama Bidang </th>
        <th> Luas Bidang </th>
        <th> Keliling Bidang </th>
    </tr>
    <tr>
        <td> Lingkaran </td>
        <td> <?= $luas_lingkaran ?> </td>
        <td> <?= $kel_lingkaran ?> </td>
    </tr>
    <tr>
        <td> Persegi Panjang </td>
        <td> <?= $luas_pp ?> </td>
        <td> <?= $kel_pp ?> </td>
    </tr>
    <tr>
        <td> Segitiga </td>
        <td> <?= $luas_segitiga ?> </td>
        <td> <?= $kel_segitiga ?> </td>
    </tr>
</table>