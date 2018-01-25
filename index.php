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
  
    <div class="flex">
    <?php
        require('connect.php');
        $query = "SELECT * FROM `products`";

        $result = mysqli_query($connection,$query);

        while($row = mysqli_fetch_assoc($result)){?>
            <div class="container">
                <div class="image"><img src="<?php echo $row['image'];?>" width="500px" alt="cook"></div>
                <div class="name"><?php echo $row['name'];?></div>
                <div class="price"><?php echo $row['price'];?></div>
                <form method = "POST" action="add_to_basket.php">
                    <input type="hidden" name="product_id" value="<?php echo $row['id'];?>">
                    <p><input type="submit"  value="Добавить в корзину"></p>
                </form>

            </div>
    
    <?php } ?>
    </div>
    
     <div class="contacts">
       <h1>Свяжитесь с нами</h1>
       <p>Наши контакты:</p>
       <p>+3806659303</p>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2155.3821027787144!2d36.33167080210598!3d50.02642808789437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a764515738c7%3A0xa76145d1f27dd8ad!2z0KLQoNCmICJEYWZpIg!5e0!3m2!1suk!2sua!4v1516884771282" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
</body>
</html>