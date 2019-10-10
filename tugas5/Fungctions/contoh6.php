<!DOCTYPE html>
<html>
<body>

<?php 
declare(strict_types=1); // strict requirement
// membuat fungsi dan mengembalikan nilai dengan angka desimal
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
// mencetak data
echo addNumbers(1.2, 5.2); 
?>

</body>
</html> 