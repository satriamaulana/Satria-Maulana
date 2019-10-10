<!DOCTYPE html>
<html>
<body>

<?php
// mendeklarasikan variabel x
$x = 5; // global scope
//  membuat fungsi myTest
function myTest() {
    // using x inside this function will generate an error
    // menampilkan text dengan nilai dari variabel x
    echo "<p>Variable x inside function is: $x</p>";
} 
// memanggil fungsi
myTest();
// menampilkan string dan nilai dari variabel x
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>