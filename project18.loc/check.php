<?php
$name= filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$mail= filter_var(trim($_POST['mail']),
FILTER_SANITIZE_STRING);
$password= filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);
$repassword= filter_var(trim($_POST['repassword']),
FILTER_SANITIZE_STRING);


if(mb_strlen($name) < 2 ||  mb_strlen($name) > 90){
    echo"Недопустимая длина имени";
    exit();
} else if(mb_strlen($mail) < 10 ||  mb_strlen($mail) > 30){
    echo"Недопустимая длина почты";
    exit();
} else if(mb_strlen($password) <=3 ||  mb_strlen($password) > 20){
    echo"Недопустимая длина пароля";
    exit();
} else if(mb_strlen($repassword) != mb_strlen($password)){
    echo"Пароли не совпадают";
    exit();
}

$mysql = new mysqli('localhost', 'root', 'root', 'project');
$mysql->query("INSERT INTO `users`(`name`,`mail`,`password`) VALUES('$name', '$mail', '$password')");
$mysql->close();
header('Location: avtoriz.html');
?>