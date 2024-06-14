<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="favorites.css">
    <!--Bootstrap reboot (для сброса стилей)-->


<!--Bootstrap сетка-->
<link rel="stylesheet" href="libs/bootstrap-grid.min.css">

<!--Шрифты с Google Fonts-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="css/styles.css">

    <meta charset="utf-8">
    <title>избранное</title>
    <link rel="stylesheet" href="favorites.css">
  </head>
  <body>
    <div class="navbar">
        <div class="container">
            <a href="nextpage.html" class="navbar-brand">A&3&BUT</a>
                 <div class="navbar-wrap">
    
                     <ul class="navbar-menu">
                        <li><a href ="nextpage.html">Каталог</a></li>
                        <li><a href ="cart.php">Корзина</a></li>
                        <li><a href ="#" class="favorites">Избранное</a></li>
                        <li><a href ="#">Контакты</a></li>
                     </ul>
                     <a href="account.html" class = "callback">Личный кабинет</a>
                 </div>
      </div>
    </div>
    <?php session_start();
if (!isset($_SESSION['favorites'])):?>

<h2>У вас нет товаров в избранном</h2>

<?php else :?>
    
  <div class="cont mt-5">
  <div class="row">
    <?php $temp1=$_SESSION['favorites'];
 
    
          foreach($temp1 as $id=>$kol ): 
            if($id == 1){
                $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/3d2/800_800_1/58572390299.jpg";
                $name = "Кроссовки FILA Trace Low";
                $cost = 50 ;
                $nameicon1="star";
                $nameicon2="star";
                $nameicon3="star";
                $nameicon4="star";
                $nameicon5="star-half-outline";
               }else if ($id == 2){
                 $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/7e3/800_800_1/73111510299.jpg";
                 $name = "Панама Vans Level Up";
                 $cost = 15;
                 $nameicon1="star";
                 $nameicon2="star";
                 $nameicon3="star";
                 $nameicon4="star";
                 $nameicon5="star";
                
               }else if ($id == 3){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/212/800_800_1/73899270299.jpg";
                   $name= "Худи Demix для мальчиков";
                   $cost = 15;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star-half-outline";
                   $nameicon5="";
                  
               }else if ($id == 4){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/5be/800_800_1/74398680299.jpg";
                   $name= "Футболка Nike";
                   $cost = 50 ;
                   $nameicon1="star";
                 $nameicon2="star";
                 $nameicon3="star";
                 $nameicon4="star";
                 $nameicon5="star";
                  
               }else if ($id == 5){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/b89/800_800_1/75152720299.jpg";
                   $name= "Кеды Vans";
                   $cost = 100 ;
                $nameicon1="star";
                $nameicon2="star";
                $nameicon3="star";
                $nameicon4="star";
                $nameicon5="star-half-outline";
                  
               }else if ($id == 6){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/5ec/800_800_1/51069650299.jpg";
                   $name= "Брюки Adidas";
                   $cost = 50 ;
                   $nameicon1="star";
                $nameicon2="star";
                $nameicon3="star";
                $nameicon4="star";
                $nameicon5="";
               }else if ($id == 7){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/800/800_800_1/74397220299.jpg";
                   $name= "Кроссовки New Balance 574";
                   $cost = 200 ;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star";
               }else if ($id == 8){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/daa/800_800_1/52181690299.jpg";
                   $name= "Куртка The North Face";
                   $cost = 150;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="";
               }else if ($id == 9){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/94a/800_800_1/73563260299.jpg";
                   $name= "Кеды Nike Court Vision Lo";
                   $cost = 50 ;
                   $nameicon1="star";
                $nameicon2="star";
                $nameicon3="star";
                $nameicon4="star";
                $nameicon5="star-half-outline";
               }else if ($id == 10){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/1e7/800_800_1/75936620299.jpg";
                   $name= "Жилет утепленный adidas";
                   $cost = 100;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star";
               }else if ($id == 11){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/5d8/800_800_1/64412170299.jpg";
                   $name= "Брюки Colambia";
                   $cost = 50;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star-half-outline";
               }else if ($id == 12){
                   $image = "https://img.ostin.com/upload/mdm/media_content/resize/01e/686_950_725a/75178590299.jpg";
                   $name= " Куртка женская";
                   $cost = 50;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star-half-outline";
               }else if ($id == 13){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/847/800_800_1/72821840299.jpg";
                   $name= "Куртка Kappa";
                   $cost = 85;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star";
               }else if ($id == 14){
                   $image = "https://img.ostin.com/upload/mdm/media_content/resize/2af/686_950_f8a7/74902660299.jpg";
                   $name= "Хлопковая рубашка в полоску";
                   $cost = 25;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="";
               }else if ($id == 15){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/708/800_800_1/66364400299.jpg";
                   $name= "Шапка Columbia Lost Lager";
                   $cost = 15 ;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star";
               }else if ($id == 16){
                   $image ="https://img.ostin.com/upload/mdm/media_content/resize/ff6/686_950_2323/67475060299.jpg" ;
                   $name= "Костюм женский";
                   $cost = 200;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="";
               }else if ($id == 17){
                   $image = "https://vipavenue.ru/upload/catalog_photos/dbc/dbc221288a451786b76ee76e9da844e9.jpg";
                   $name= "Пуховик стеганный GUCCI";
                   $cost = 3000;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="";
                   $nameicon4="";
                   $nameicon5="";
               }else if ($id == 18){
                   $image = "https://vipavenue.ru/upload/resize_cache/catalog_photos/d09/252_336_140cd750bba9870f18aada2478b24840a/d09243298bc7e9ab431071f7d26e414a.jpg";
                   $name= "Лоферы из КРОКОДИЛА ZILLI";
                   $cost = 10000;
                   $nameicon1="star";
                   $nameicon2="star";
                   $nameicon3="star";
                   $nameicon4="star";
                   $nameicon5="star";
               }
              
                ;?>
       
          
           <!-- Здесь что-то будет-->

    <div class="col-md-4 crossman man" id="<?=$id?>">
      <div class="product">
        <div class="image">
          <img src="<?=$image?>" alt="" id="xxx">
        </div>
        <div class="info">
          <h3 id="101"><?=$name?></h3>
          <ul class="rating">
            <li><ion-icon name="<?=$nameicon1?>"></ion-icon></li>
            <li><ion-icon name="<?=$nameicon2?>"></ion-icon></li>
            <li><ion-icon name="<?=$nameicon3?>"></ion-icon></li>
            <li><ion-icon name="<?=$nameicon4?>"></ion-icon></li>
            <li><ion-icon name="<?=$nameicon5?>"></ion-icon></li>
          </ul>
          <div class="info-price">
            <span class="price"><?=$cost?><small>$</small></span>
            <button type="button" class="delete-btn" id="<?=$id?>"><ion-icon name="trash-outline"></ion-icon></button>
            <button type="button" name="button" class="add-to-cart" data-id="111205" id="<?=$id?>" ><ion-icon name="cart-outline"></ion-icon></button> <!--кнопка корзины-->
          </div>
        </div>
      </div>
    </div>


        
          <?php endforeach; ?>
  </div>
  </div>
            
<?php endif; ?>   




<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>       
<script>
  $('.add-to-cart').click(function () {//клип на кнопку
      var id = $(this).attr('id'); //получаем id этой кнопки
          $.ajax({//передаем ajax-запросом данные
          type: "POST", //метод передачи данных
          url: '/addtocart.php',//php-файл для обработки данных
          data: {id_tov: id},//передаем наши данные
          success: function(data) {//
              $('.basker_kol').html(data);//меняем количество товаров на кнопке корзины 
              }
          });
  });
</script>
<script>
  

  
  $(document).on('click', '.delete-btn', function() {
  var productId = $(this).attr('id'); // получаем id товара
  $.ajax({
    url: 'deletefavorites.php',
    type: 'POST',
    data: {id_tov: productId},
    dataType: 'json',
    success: function(response) {
      if (response.success) {
        // удаляем строку с товаром из таблицы
        $('#'+productId).remove();
        // пересчитываем итоговую стоимость
        //calculateTotalCost();
      } 
    }
   
  });
}); 
</script>
  </body>
</html>



