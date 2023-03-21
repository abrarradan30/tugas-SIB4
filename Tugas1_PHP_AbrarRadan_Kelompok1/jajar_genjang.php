<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <h2> Menghitung bangun datar jajar genjang </h2>
    
    <form method="POST">
        <table>
            <tr>
                <td> Alas (a) </td>
                <td>
                    <input type="text" name="a" require>
                </td>
            </tr> 
            <tr>
                <td> Sisi b </td>
                <td>
                    <input type="text" name="b" require>
                </td>
            </tr> 
            <tr>
                <td> Tinggi (t) </td>
                <td>
                    <input type="text" name="t" require>
                </td>
            </tr> 
            <tr>
                <td> 
                    <input type="submit" name="submit" value="hitung">
                </td>
            </tr>
        </table>
    </form>

<?php
    // menghitung keliling jajar genjang
    if(isset($_POST['submit'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $keliling_jajargenjang = 2 * ($a + $b);

        echo '<hr>';
        echo 'Hasil perhitungan keliling jajar genjang';
        echo '<br> Diketahui rumus, K = 2 x (a+b)';
        echo '<br> Alas : '.$a;
        echo '<br> Sisi b : '.$b;

        echo '<br> Keliling jajar genjang = '.$keliling_jajargenjang;
    }
?>

<?php
    // menghitung luas jajar genjang
    if(isset($_POST['submit'])) {
        $a = $_POST['a'];
        $t = $_POST['t'];

        $luas_jajargenjang = $a * $t;

        echo '<hr>';
        echo 'Hasil perhitungan luas jajar genjang';
        echo '<br> Diketahui rumus, L = a x t';
        echo '<br> Alas : '.$a;
        echo '<br> Tinggi : '.$t;

        echo '<br> Luas jajar genjang = '.$luas_jajargenjang;
    }
?>

</body>
</html>