<?php

//connect to database
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
 $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Пользователь успешно создан," . "теперь вы можете <a href='signin.php'>Войти</a>";
    }else{
        echo "Регистрация не удалась";
    }
}
?>