<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Смена пароля</title>
    <link rel="stylesheet" href="newparol.css">
</head>
<body>
    <p>Введите новый пароль</p>
    <form action="checknewpar.php" method="post">
        <input type="password" name="newpass" id="new" placeholder="Новый пароль">
        <input type="password" name="repass" id="repeat" placeholder="Повторите пароль">
        <button type="submit" id="change">Сменить пароль</button>
        
    </form>
</body>
</html>