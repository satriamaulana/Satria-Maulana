<!DOCTYPE html>
<html>
<body>

<?php
// variabel t dengan nilai dari Hour
$t = date("H");
// mencetak kalimat dibawah ini
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";
// jika t kurang dari 10
if ($t < "10") {
    // mencetak kalimat dibawah ini
    echo "Have a good morning!";
    // jika t kurang dari 20 dan lebih dari 10
} elseif ($t < "20") {
    // mencetak kalimat dibawah ini
    echo "Have a good day!";
} else {
    // mencetak kalimat dibawah ini
    echo "Have a good night!";
}
?>

</body>
</html> 