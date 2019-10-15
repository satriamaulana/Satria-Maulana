<!DOCTYPE html>
<!-- pembuka dari script html -->
<html>
<!-- pembuka kode head -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- judul kode html -->
    <title>Belajar Form PHP</title>
</head>
<!-- penutup kode head -->
<!-- kode badan untuk html -->
<body>
    <!-- digunakan untuk membuat heading pada html -->
    <h2>Tutorial Belajar Form HTML - PHP </h2>
    <!-- 
        1. atrribut action : berisi sebuah nilai yang dikirim ke file php
        2. method adalah metode untuk mengirimkan data dari form tersebut
            -> get merupakan metode pengiriman data melalui url
            -> post merupakan metode pengiriman data tanpa melalui url
     -->
    <form action="proses.php" method="get">
        <!-- 
            input type text menampilkan kotak isian 
            attribut name berfungsi untuk penamaan kotak inputan
         -->
        Nama: <input type="text" name="nama" />
        <!-- berfungsi untuk menambak break atau enter -->
        <br />
        E-Mail: <input type="text" name="email" />
        <br />
        <!-- input type submit berfungsi untuk mengirimkan data ketika di klik -->
        <input type="submit" value="Proses Data">
        <!-- akhiran dari form -->
    </form>
    <!-- penutup dari tag body -->
</body>
<!-- penutup dari tag html -->
</html>