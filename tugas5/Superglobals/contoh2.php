<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
// jika ada method yang bertipe post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    // mengirimkan data melalui post
    $name = $_POST['fname'];
    // mengecek name apakah kosong atau tidak
    if (empty($name)) {
        // mencetak
        echo "Name is empty";
    } else {
        // mencetak hasil name
        echo $name;
    }
}
?>

</body>
</html>