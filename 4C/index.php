<?php
    // memulai interaksi SESSION
    session_start();

    // cek apakah ada SESSION["email"]
    // ! : not (tidak)
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <div class="container w-75">
    <h1>Aplikasi Perpustakaan</h1>

    <a class="btn btn-primary" href="./buku.php">Lihat daftar buku</a>
    <br>
    <a class="btn btn-primary" href="./staff.php">Lihat daftar staff</a>
    <br><br>
    <form action="logout-proccess.php" method="POST">
        <button type="submit">LOGOUT</button>
    </form>
    </div>
</body>
</html>