<?php
$name= filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$password= filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

if(mb_strlen($name) < 3 ||  mb_strlen($name) > 90){
    echo"Недопустимая длина имени";
    exit();
} else if(mb_strlen($password) <=3 ||  mb_strlen($password) > 20){
    echo"Недопустимая длина пароля";
    exit();
}

$mysql = new mysqli('localhost','root', 'root', 'project');


$result = $mysql->query("SELECT * FROM `users` WHERE `name`='$name' AND `password`='$password'");
$user= $result->fetch_assoc();
if(count($user)==0){
    echo"Такой пользователь не найден";
    exit();
} 


$mysql->close();
header('Location: account.html');

?>
