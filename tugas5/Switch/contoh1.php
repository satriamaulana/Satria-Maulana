<!DOCTYPE html>
<html>
<body>

<?php
// deklarasi variabel
$favcolor = "red";
// variabel yang dipilih untuk pemilihan
switch ($favcolor) {
    // jika nilai dari favcolor adalah red
    case "red":
    // mencetak kalimat dibawah ini
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
    // jika tidak ada case yang sama maka akan menceta kalimat dibawah ini
        echo "Your favorite color is neither red, blue, nor green!";
}
?>
 
</body>
</html>