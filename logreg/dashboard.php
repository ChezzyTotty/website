<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kullanıcı Paneli</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p style="color: #66ff00">Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p style="color: #66ff00">Burası senin kullanıcı panelin .</p>
        <p><a style="color: #ffffff" href="../index.php">Ana Sayfa</a></p>
        <p><a style="color: #ffffff" href="profil.php">Şifre değiştir</a></p>
        <p><a style="color: #ffffff" href="logout.php">Logout</a></p>
    </div>
</body>
</html>
