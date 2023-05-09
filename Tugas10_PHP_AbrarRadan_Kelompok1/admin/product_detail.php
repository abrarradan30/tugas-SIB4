<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);
?>

<div>
    <h2> Detail Data Produk </h2>
    <h2> Kode : <?= $produk['kode'];?> </h2>
    <h2> Nama Produk : <?= $produk['nama'];?> </h2>
    <h2> Harga Beli : <?= $produk['harga_beli'];?> </h2>
    <h2> Harga Jual : <?= $produk['harga_jual'];?> </h2>
    <h2> Stok : <?= $produk['stok'];?> </h2>
    <h2> Minimal Stok : <?= $produk['min_stok'];?> </h2>
    <h2> jenis Produk ID : <?= $produk['jenis_produk_id'];?> </h2>
</div>