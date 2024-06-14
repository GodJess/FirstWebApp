
    <!--<p>Введите пароль</p>
    <form action="" method="post">
        <input type="password" name="pass" id="" placeholder="Новый пароль">
        <input type="password" name="pass" id="" placeholder="Повторите пароль">
        <button type="submit">Сменить пароль</button>
    </form>-->
    <?php
    $email=$_POST['email'];
    $password=$_POST['password'];

    $error='';



    if($email =='')
        $error= 'Введите почту';
    /*elseif($password =='')
        $error= 'Введите пароль'; Просто у нас бд с паролми нету*/
    
        if($error !=''){
            echo $error;
            exit;
        }
        header('Location: /newparol.php');
    ?>
