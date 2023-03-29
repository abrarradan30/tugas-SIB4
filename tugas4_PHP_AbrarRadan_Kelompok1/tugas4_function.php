<style>
#tb2 {
    border-collapse: collapse;
    border: 3px solid black;
}
th, td {
    padding: 5px;
}
</style>
<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "ILKOM"=>"Ilmu Komputer", "TE"=>"Teknik Elektro"];

$ar_skill = ["HTML"=>10, "CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30, "Laravel"=>40];
$domisili = ["Jakarta","Bandung","Bekasi","Malang","Surabaya"];
?>
<fieldset style="background-color: #ADD8E6;">
    <legend> <b> Form Registrasi Kelompok Belajar <b> </legend>
<table>
    <thead>
        <tr>
            <th>Form Registrasi</th>
        </tr>
    </thead>
    <tbody>
        <form method="POST">
            <tr>
                <td>Nim :</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama"> 
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jk" value="L"> Laki-Laki &nbsp;
                    <input type="radio" name="jk" value="P"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Program Studi :</td>
                <td>
                    <select name="prodi">
                        <?php
                        foreach($ar_prodi as $prodi => $v) {
                            ?>
                            <option value="<?= $prodi ?>"> <?= $v ?> </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Skill Programming :</td>
                <td>
                    <?php
                    foreach($ar_skill as $skill => $s) {
                        ?>
                    <input type="checkbox" name="skill[]" value="<?= $skill ?>"> <?= $skill ?> 
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="text" name="email"> 
                </td>
            </tr>
            <tr>
                <td>Domisili :</td>
                <td>
                    <select name="domisili">
                        <?php
                        foreach($domisili as $d) {
                            ?>
                            <option value="<?= $d ?>"> <?= $d ?> </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
    </tbody>
    <tfoot>
        <tr>
            <th colspan="2">
                <button name="proses"> Submit </button>
            </th>
        </tr>
    </tfoot>
    </form>
</table>
</fieldset>

<?php
if(isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];
    $domisili = $_POST['domisili'];
}

// hitung skor 
$skor = 0;
foreach($skill as $s) {
    if (isset($ar_skill[$s])) {
        $skor += $ar_skill[$s];
    }
}
    
// menentukan kategori skill dengan fungsi
function kategori_skill($skor) {
    if($skor >= 100 && $skor <= 150) return 'Sangat Baik';
    else if ($skor >= 60 && $skor <= 99) return 'Baik';
    else if ($skor >= 40 && $skor <= 59) return 'Cukup';
    else if ($skor >= 1 && $skor <= 39) return 'Kurang';
    else if ($skor >= 0) return 'Tidak Memadai';
    else return '';
}

echo '<hr>';
?>
<table id="tb2">
    <tr>
        <td> NIM : <?= $nim ?> </td>
    </tr>
    <tr> 
        <td> Nama : <?= $nama ?> </td>
    </tr>
    <tr>    
        <td> Jenis Kelamin : <?= $jk ?> </td>
    </tr>
    <tr>
        <td> Program Studi : <?= $prodi ?> </td>
    </tr>
    <tr>
        <td>
        Skill : 
            <?php 
            foreach($skill as $s) { ?>
            <?= $s ?> , 
            <?php } ?>
        </td> 
    </tr>
    <tr>
    <td> Skor Skill : <?= $skor ?> </td> 
    </tr>
    <tr>
        <?php 
        $kategori = kategori_skill($skor);
        ?>           
        <td> Kategori Skill : <?= $kategori ?> </td>
    </tr>
    <tr>
        <td> Email : <?= $email ?> </td>
    </tr>
    <tr>
        <td> Domisili : <?= $domisili ?> </td>
    </tr>
</table>