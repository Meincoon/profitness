<?php
	$popup_name = filter_var(trim($_POST['popup_name']), FILTER_UNSAFE_RAW);
	$popup_telephone = filter_var(trim($_POST['popup_telephone']), FILTER_UNSAFE_RAW);
    if (mb_strlen($popup_name) < 2 || mb_strlen($popup_name) > 50) {
        echo "некорректное имя";
        exit();
    } else if (mb_strlen($popup_telephone) !== 11 || !ctype_digit($popup_telephone)) {
        echo "некорректный номер телефона";
        exit();
    }
	$mysqli = new mysqli('localhost', 'root', '', 'profitness');
	$mysqli->query("INSERT INTO `users` (`name`, `telephone`) VALUES ('$popup_name', '$popup_telephone')");
    $mysqli->close();
    header('location:../index.html')
?>