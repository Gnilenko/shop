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
  
    <form class="form" action="reg.php" method="POST">
        
        <input type="text" name="username" placeholder="Имя" required>
        <input type="text" name="password" placeholder="Пароль" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="submit" name="submit" value="Регистрация">
    </form>
</body>
</html>