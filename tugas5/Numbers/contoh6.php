<!DOCTYPE html>
<html>
<body>

<?php
// Check if the variable is numeric   
$x = 5985;
// memastikan apakah x adalah numerik
var_dump(is_numeric($x));
echo "<br>";
$x = "5985";
// memastikan apakah x adalah numerik
var_dump(is_numeric($x));
echo "<br>";
$x = "59.85" + 100;
// memastikan apakah x adalah numerik
var_dump(is_numeric($x));
echo "<br>";
$x = "Hello";
// memastikan apakah x adalah numerik
var_dump(is_numeric($x));
?>  

</body>
</html>