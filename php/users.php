<?php
	$name = filter_var(trim($_POST['name']), FILTER_UNSAFE_RAW);
	$telephone = filter_var(trim($_POST['telephone']), FILTER_UNSAFE_RAW);
    if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
        echo "некорректное имя";
        exit();
    } else if (mb_strlen($telephone) !== 11 || !ctype_digit($telephone)) {
        echo "некорректный номер телефона";
        exit();
    }
	$mysqli = new mysqli('localhost', 'root', '', 'profitness');
	$mysqli->query("INSERT INTO `users` (`name`, `telephone`) VALUES ('$name', '$telephone')");
    $mysqli->close();
    header('location:../index.html')
?>