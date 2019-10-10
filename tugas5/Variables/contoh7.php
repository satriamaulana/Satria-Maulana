<!DOCTYPE html>
<html>
<body>

<?php
// deklarasi x dan y
$x = 5;
$y = 10;
function myTest() {
    // membuat global variabel dan menjumlahkan x dan y
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 
// memanggil fungsi mytest
myTest();
// menampilkan nilai dari variabel y
echo $y;
?>

</body>
</html>