<?php
session_start();

// Kullanıcının oturum açtığını kontrol et
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Oturum açılmadıysa giriş sayfasına yönlendir
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Değiştir</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    /* Genel sayfa stilini düzenleyin */
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .container {
        background-color: #fff;
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        max-width: 800px;
    }

    h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 20px;
    }

    h3 {
        color: #555;
        font-size: 20px;
        margin-bottom: 10px;
    }

    /* Profil bilgileri bölümü */
    p {
        color: #444;
        font-size: 16px;
        line-height: 1.5;
    }

    /* Şifre değiştirme formu */
    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #666;
        font-size: 18px;
    }

    .password-input {
        width: 99%;
        padding: 11px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
<<<<<<< HEAD
        font-weight: bold;
        margin-bottom: 20px;
        border-radius:10px;
        color: #000000;

=======

        position: sticky; /* Göz simgesini hizalamak için */
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
    }

    .password-input:focus {
        border-color: #55a1ff;
        outline: none;
<<<<<<< HEAD
        
=======
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
    }

    .password-toggle {
        position: absolute; /* Göz simgesini mutlak pozisyona alın */
<<<<<<< HEAD
        right: 5px;
        top: 35%; /* Dikey hizalama */
=======
        right: 10px;
        top: 50%; /* Dikey hizalama */
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
        transform: translateY(-50%); /* Dikey hizalama */
        cursor: pointer;
    }

    .password-toggle i {
        color: #666;
        font-size: 18px;
    }

    button[type="submit"] {
<<<<<<< HEAD
        background-color: #000fff;
=======
        background-color: #55a1ff;
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        margin-bottom: 10px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

<<<<<<< HEAD
     .Main{
        background-color: #000fff;
        color: #fff;
        padding: 12px 24px;
        border: none;
        border-radius: 4px;
        margin-bottom: 10px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }
     


=======
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
    button[type="submit"]:hover {
        background-color: #3f8ae0;
    }

    /* Kullanıcı adını beyaz yapın */
    #user-trigger {
        color: #fff;
    }

    /* Kullanıcı adının beyaz rengini düzeltmek için hover efekti ekleyin */
    #user-trigger:hover {
        background-color: transparent;
    }
</style>
<body>
    <div id="menu">
        <?php
        // Açılır menü kodu
        ?>
    </div>

    <div class="container">
        <h2>Şifre Değiştir</h2>
<<<<<<< HEAD
        <p style="font-weight: bold;">Merhaba, <?php echo $_SESSION['username']; ?>!</p>
        <p style="font-weight: bold;">Burada şifre bilgilerinizi görüntüleyebilir ve şifrenizi değiştirebilirsiniz.</p>
        
        <h3>Şifre Değiştir</h3>
        <form action="sifre_degistir.php" method="post">
            <label for="current_password" >Mevcut Şifre: </label> 
            <div style="position: relative;">
                <input type="password" id="current_password" name="current_password" class="password-input"  placeholder="Eski Şifre" required>
=======
        <p>Merhaba, <?php echo $_SESSION['username']; ?>!</p>
        <p>Burada şifre bilgilerinizi görüntüleyebilir ve şifrenizi değiştirebilirsiniz.</p>
        
        <h3>Şifre Değiştir</h3>
        <form action="sifre_degistir.php" method="post">
            <label for="current_password">Mevcut Şifre:</label>
            <div style="position: relative;">
                <input type="password" id="current_password" name="current_password" class="password-input" required>
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
                <div class="password-toggle" onclick="togglePassword('current_password')">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            
            <label for="new_password">Yeni Şifre:</label>
            <div style="position: relative;">
<<<<<<< HEAD
                <input type="password" id="new_password" name="new_password" class="password-input" placeholder="Yeni Şifre"required>
=======
                <input type="password" id="new_password" name="new_password" class="password-input" required>
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
                <div class="password-toggle" onclick="togglePassword('new_password')">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            
            <label for="confirm_password">Yeni Şifre Tekrar:</label>
            <div style="position: relative;">
<<<<<<< HEAD
                <input type="password" id="confirm_password" name="confirm_password" class="password-input"  placeholder="Yeni Şifreyi Doğrula" required>
=======
                <input type="password" id="confirm_password" name="confirm_password" class="password-input" required>
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
                <div class="password-toggle" onclick="togglePassword('confirm_password')">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            
            <button type="submit">Şifre Değiştir</button>
<<<<<<< HEAD
            <a  class="Main"  href="../index.php" >Ana Menü</a>
=======
>>>>>>> f141a96cf5a43a0e8966f42cb1e4061c4945d62f
        </form>
    </div>

    <script>
        function togglePassword(inputId) {
            var passwordInput = document.getElementById(inputId);
            var icon = passwordInput.nextElementSibling.querySelector('i');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.className = "fa fa-eye-slash";
            } else {
                passwordInput.type = "password";
                icon.className = "fa fa-eye";
            }
        }
    </script>
</body>
</html>
