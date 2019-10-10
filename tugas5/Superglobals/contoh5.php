<!DOCTYPE html>
<html>
<body>

<?php 
// deklarasi
$x = 75;
$y = 25; 
// membuat fungsi
function addition() {
    // menjumlahkan variabel x dan y
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
// memanggil fungsi
addition();
// mencetak z
echo $z;
?>

</body>
</html>