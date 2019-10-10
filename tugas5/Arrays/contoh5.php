<!DOCTYPE html>
<html>
<body>

<?php
// deklarasi array dengan key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// looping jumlah array pada age
foreach($age as $x => $x_value) {
    // mencetak nilai dari array
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>