<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Мои заказы</title>
    <link rel="stylesheet" href="orders.css">
  </head>
  <body>
    
    
      <table class="table">
          <tr>
            <th>Номер заказа</th>
            <th>Имя клиента</th>
          <th>Фамилия клиента</th>
          <th>Адрес клиента</th>
          <th>Номер клиента</th>
          <th>Цена заказа</th>
          </tr>
          <?php
             $mysql = new mysqli('localhost', 'root', 'root', 'orders');
            $products =  $mysql->query("SELECT `id`, `name` , `surname`, `adress`, `number` FROM `orders`");
            $products = mysqli_fetch_all($products);
           foreach($products as $product){
            ?>
                 
                 <tr>
                       <td><?=$product[0]?></td>
                       <td><?=$product[1]?></td>
                       <td><?=$product[2]?></td>
                       <td><?=$product[3]?></td>
                       <td><?=$product[4]?></td>
                       <td></td>
                 </tr>
                 
                 <?php
           }
    
    ?>
        
      </table>
  </body>
</html>