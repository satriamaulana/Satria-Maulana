<!DOCTYPE html>
<html>
<body>

<?php
// Check if the type of a variable is integer   
$x = 5985;
// memastikan apakah x adalah bilangan bulat
var_dump(is_int($x));
echo "<br>";
// Check again... 
$x = 59.85;
// memastikan apakah x bilangan bulat
var_dump(is_int($x));
?>  

</body>
</html>