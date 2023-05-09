<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);
?>

<div>
    <br>
    <h2> Detail Data Kartu </h2> <br>
    <h4> Kode : <?= $kartu['kode'];?> </h4> <br>
    <h4> Nama : <?= $kartu['nama'];?> </h4> <br>
    <h4> Diskon : <?= $kartu['diskon'];?> </h4> <br>
    <h4> Iuran : <?= $kartu['iuran'];?> </h4>
</div>