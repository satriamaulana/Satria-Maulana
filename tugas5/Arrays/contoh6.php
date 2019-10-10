<!DOCTYPE html>
<html>
<body>

<?php
// deklarasi array
$cars = array("Volvo", "BMW", "Toyota");
// jumlah array
$arrlength = count($cars);
// looping array
for($x = 0; $x < $arrlength; $x++) {
    // mencetak nilai dari array
    echo $cars[$x];
    echo "<br>";
}
?>

</body>
</html>