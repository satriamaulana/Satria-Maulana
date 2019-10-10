<?php declare(strict_types=1); // strict requirement ?>
<!DOCTYPE html>
<html>
<body>

<?php
// membuat fungsi dan memberi nilai default parameter
function setHeight(int $minheight = 50) {
    // mencetak kalimat
    echo "The height is : $minheight <br>";
}
// memanggil fungsi dan mengirimkan parameter
setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>

</body>
</html