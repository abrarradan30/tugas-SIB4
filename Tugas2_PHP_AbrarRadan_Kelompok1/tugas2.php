<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tugas 2 PHP </title>
</head>
<body>
    <form method="POST">
    <h3> Perhitungan Gaji Pegawai </h3>
        <label> Nama </label> 
            <input type="text" name="nama" placeholder="masukan nama"> <br>
        <label> Jabatan </label>
            <select name="jabatan">
                <option value=""> -pilih jabatan- </option>
                <option value="manager"> Manager </option>
                <option value="asisten"> Asisten </option>
                <option value="kabag"> Kabag </option>
                <option value="staff"> Staff </option>
            </select> <br>
        <label> Status </label>
            <select name="status">
                <option value=""> -pilih status- </option>
                <option value="belum menikah"> Belum menikah </option>
                <option value="menikah"> Menikah </option>
            </select> <br>
        <label> Jumlah Anak </label> 
            <input type="number" name="anak" placeholder="masukan jumlah anak"> <br>
        <label> Agama </label>
            <select name="agama">
                <option value=""> -pilih agama- </option>
                <option value="muslim"> Muslim </option>
                <option value="non muslim"> Non muslim </option>
            </select> <br>
        <button name="proses" type="submit"> Gaji </button>
    </form>

<?php

error_reporting(0);
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];
$anak = $_POST['anak'];
$agama = $_POST['agama'];
$tombol = $_POST['proses'];

// gapok = gaji pokok
switch($jabatan) {
    case "manager" : $gapok = 20000000; break;
    case "asisten" : $gapok = 15000000; break;;
    case "kabag" : $gapok = 10000000; break;
    case "staff" : $gapok = 4000000; break;
    default : $gapok = "";
}

// tujab = tunjangan jabatan
$tujab = 0.2 * $gapok;

// tukel = tunjangan keluarga
if($status == "menikah") {
    if($anak >= 1 && $anak <= 2) {
        $tukel = 0.05 * $gapok;
    } else if($anak >= 3 && $anak <= 5) {
        $tukel = 0.1 * $gapok;
    } else {
        $tukel = 0;
    } 
    } else {
        $tukel = 0;
}

// gakot = gaji kotor
$gakot = $gapok + $tujab + $tukel;

// zakat bagi muslim, min gakot 6jt
$zakat_profesi = ($agama == "muslim" && $gakot >= 6000000) ? 0.025 * $gakot : 0;

// total gaji diterima
$total_gaji = $gakot - $zakat_profesi;
echo '<hr>';

if(isset($tombol)) {
?>

<p>Hasil Perhitungan Gaji</p>
Nama = <?= $nama ?> <br>
Jabatan = <?= $jabatan ?> <br>
Status = <?= $status ?> <br>
Anak = <?= $anak ?> <br>
Agama = <?= $agama ?> <br>
Tunjangan Jabatan = <?= $tujab ?> <br>
Tunjangan Keluarga = <?= $tukel ?> <br>
Gaji Kotor = <?= $gakot ?> <br>
Zakat = <?= $zakat_profesi ?> <br>
Take Home Pay = <?= $total_gaji ?> 

<?php } ?>

</body>
</html>