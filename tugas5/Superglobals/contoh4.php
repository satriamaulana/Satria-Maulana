<!DOCTYPE html>
<html>
<body>

<?php
// mencetak direktory php
echo $_SERVER['PHP_SELF'];
echo "<br>";
// mencetak nama server yang digunakan
echo $_SERVER['SERVER_NAME'];
echo "<br>";
// menampilkan host yang digunakan
echo $_SERVER['HTTP_HOST'];
echo "<br>";
// menampilkan link ke file
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
// menampilkan agen user
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
// menampilkan lokasi file php
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>