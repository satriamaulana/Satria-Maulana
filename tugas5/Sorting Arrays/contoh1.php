<!DOCTYPE html>
<html>
<body>

<?php
// deklarasi array
$cars = array("Volvo", "BMW", "Toyota");
// menampilkan data dari yang terkecil
sort($cars);
// cari jumlah array
$clength = count($cars);
// looping array
for($x = 0; $x < $clength; $x++) {
    // cetak array
    echo $cars[$x];
    echo "<br>";
}
?>

</body>
</html>