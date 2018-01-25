<?php
	require('connect.php');
	session_start();
	$username = $_SESSION['login'];
	$product_id = $_POST['product_id'];
	
	$query = "INSERT INTO basket(user_name, product_id) VALUES('$username','$product_id')";

	$result = mysqli_query($connection,$query);

	if(!$result) {
		echo "Some error" . mysql_error();
	}
	else {
		echo "Товар добавлен в корзину" . ", теперь вы можете <a href='index.php'>Вернуться</a>";
	}
	
?>