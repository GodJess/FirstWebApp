<?php
$name= filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$surname= filter_var(trim($_POST['surname']),
FILTER_SANITIZE_STRING);
$adress= filter_var(trim($_POST['adress']),
FILTER_SANITIZE_STRING);
$number= filter_var(trim($_POST['number']),
FILTER_SANITIZE_STRING);
$price= filter_var(trim($_POST['price']),
FILTER_SANITIZE_STRING);


if(mb_strlen($name) < 4 ||  mb_strlen($name) > 90){
    echo"Недопустимая длина имени";
    exit();
} else if(mb_strlen($surname) < 4 ||  mb_strlen($surname) > 30){
    echo"Недопустимая длина фамилии";
    exit();
} else if(mb_strlen($adress) <=10 ||  mb_strlen($adress) > 40){
    echo"Недопустимая длина адреса";
    exit();
} else if(mb_strlen($number) <10 || mb_strlen($number) > 12){
    echo"Введен не коректный номер";
    exit();
}

$mysql = new mysqli('localhost', 'root', 'root', 'orders');
$mysql->query("INSERT INTO `orders`(`name`,`surname`,`adress`, `number`, `price`) VALUES('$name', '$surname', '$adress' , '$number', '$price')");
$mysql->close();
header('Location: account.html');
?>