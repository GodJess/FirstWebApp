<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Мои данные</title>
    <link rel="stylesheet" href="orders.css">
  </head>
  <body>
    
    
      <table class="table">
          <tr>
            <th>Имя</th>
            <th>Mail</th>
          <th>Password</th>
          
          </tr>
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


$result = $mysql->query("SELECT  `name` , `mail`, `password` FROM `users` WHERE `name` = '$name' AND `password`='$password'");
$user= $result->fetch_assoc();
if(count($user)==0){
    echo"Такой пользователь не найден";
    exit();
} 
else{


$data = mysqli_fetch_all($result);
foreach($data as $product){
  ?>
       
       <tr>
             <td><?=$product[0]?></td>
             <td><?=$product[1]?></td>
             <td><?=$product[2]?></td>
             
       </tr>
       
       <?php
       
 }
}
$mysql->close();
header('Location: account.html');
?>

        
      </table>
  </body>
</html>