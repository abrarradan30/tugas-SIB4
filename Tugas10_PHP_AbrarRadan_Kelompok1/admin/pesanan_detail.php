<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);
?>

<div>
    <br>
    <h2> Detail Data Pesanan </h2> <br>
    <h4> Tanggal : <?= $pesanan['tanggal'];?> </h4> <br>
    <h4> Total : <?= $pesanan['total'];?> </h4> <br>
    <h4> Pelanggan ID : <?= $pesanan['pelanggan_id'];?> </h4>
</div>