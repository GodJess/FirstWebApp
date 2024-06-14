<?php
  $newpass=filter_var(trim($_POST['newpass']),
  FILTER_SANITIZE_STRING);
  $repass=filter_var(trim($_POST['repass']),
  FILTER_SANITIZE_STRING);
  $email =filter_var(trim($_POST['emails']),
  FILTER_SANITIZE_STRING);



  
  $againerror='';

  if($newpass!=$repass)
    $againerror='Пароли не совпадают';
    
    
  
  elseif($newpass =='' ||  $repass =='')
    $againerror='Пожалуйста,заполните все поля';
    


    if($againerror !=''){
      echo $againerror;
      exit;
    }

    if($newpass != "" && $repass != "" && $newpass==$repass){
      $mysql = new mysqli('localhost','root', 'root', 'project');
      $result = $mysql->query("UPDATE `users` SET `password` = '$newpass' WHERE `mail`='$email'");
      $user= $result->fetch_assoc();
         if(count($user)==0){
            echo"Такой пользователь не найден";
            exit();
          } else{
            echo 'успешно';
          }

    }
  header('Location: /');
  
   
  
