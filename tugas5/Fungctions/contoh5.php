<!DOCTYPE html>
<html>
<body>

<?php declare(strict_types=1); // strict requirement
// membuat fungsi dan me return hasil penjumlahan parameter
function addNumbers(int $a, int $b) {
    return $a + $b;
}
// menampilkan data dari fungsi 
echo addNumbers(5, "5 days"); 
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?> 

</body>
</html> 