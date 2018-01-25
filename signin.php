<?php
    include('login.php');
    if ((isset($_SESSION['username']) != '')) {
        header('Location: home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">
    
</head>
<body>
    <div class="header">
        <img src="img/zara.png" alt="">
       <ul class="nav">
            <li class="home"><a href="index.php">Домашняя</a></li>
            <li><a href="basket.php">Корзина</a></li>
            <li><a href="register.php">Регистрация</a></li>
            <li><a href="signin.php">Войти</a></li>
        </ul>
    </div>

    <form action="login.php" method="POST">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <input type="submit" name="submit" value="Войти">
    </form>
</body>
</html>