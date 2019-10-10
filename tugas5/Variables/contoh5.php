<!DOCTYPE html>
<html>
<body>

<?php
// fungsi mytest
function myTest() {
    // membuat variabel x yang hanya bisa diakses di fungsi myTest
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
} 
// memanggil fungsi myTest
myTest();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

</body>
</html>