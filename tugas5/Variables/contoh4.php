<!DOCTYPE html>
<html>
<body>

<?php
// deklarasi variabel x dan y
$x = 5;
$y = 10;
// membuat fungsi msTest
function myTest() {
    // menjadikan variabel x dan y menjadi global
    global $x, $y;
    // menjumlahkan nilai dari x dan y
    $y = $x + $y;
} 
// menjalankan fungsi myTest
myTest();  // run function
echo $y; // output the new value for variable $y
?>

</body>
</html>