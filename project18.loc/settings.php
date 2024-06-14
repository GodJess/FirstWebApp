<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сменить пароль</title>
    <link rel="stylesheet" href="settings.css">
</head>
<body>
    

    <p id="text">Введите почту к которой привязан ваш аккаунт и ваш старый пароль</p>
    <form action="parol.php" method="post">
        <div class="block">
        <input type="email" name="email" id="entem" placeholder="Введите почту">
        <input type="password" name="pass" id="oldpass" placeholder="Старый пароль">
        <button type="submit" class="buttonsend">Отправить</button>
        </div>
       
    </form>
    <script>
$('.buttonsend').click(function () {//клип на кнопку
      var email = document.getElementById('entem').value; //получаем id этой кнопки
          $.ajax({//передаем ajax-запросом данные
          type: "POST", //метод передачи данных
          url: '/checknewpar.php',//php-файл для обработки данных
          data: {emails: email},//передаем наши данные
          
          });
  });

    </script>
</body>
</html>