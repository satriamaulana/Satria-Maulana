<!DOCTYPE html>
<html>
<body>

<?php
// membuat fungsi dan parameter
function addNumbers(int $a, int $b) {
    // menambahkan variabel
    return $a + $b;
}
echo addNumbers(5, "5 days"); 
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?> 

</body>
</html> 