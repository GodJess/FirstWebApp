<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <link rel="stylesheet" href="basket.css">
</head>
<body>
<header id="header" class="header lock-padding"></header>
<div class="navbar">
        <div class="container">
            <a href="nextpage.html" class="navbar-brand">A&3&BUT</a>
                 <div class="navbar-wrap">
    
                     <ul class="navbar-menu">
                        <li><a href ="nextpage.html">Каталог</a></li>
                        <li><a href ="#" class="cart">Корзина</a></li>
                        <li><a href ="favorites.php">Избранное</a></li>
                        <li><a href ="#">Контакты</a></li>
                     </ul>
                     <a href="account.html" class = "callback">Личный кабинет</a>
                 </div>
      </div>
    </div>
    
        <!-- Title -->
       
   
        <!-- Товар #1 -->
        
<?php session_start();
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) < 0):?>

<h2>Ваша корзина пуста</h2>

<?php else :?>
    <div class=content1>
    <?php if(count($_SESSION['cart']) > 0): ?>
<table class="table">
    <tr>
        <th class="indent">Изображение</td>
        <th class="indent">Название</td>
        <th class="indent">Количество</td>
        <th class="indent">Удалить</td>
        <th class="indent">Стоимость</td>
        <th class="indent">Цена</th>
        
    </tr>
    <?php $temp=$_SESSION['cart'];
 
    
          foreach($temp as $id=>$kol ): 
            if($id == 1){
                $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/3d2/800_800_1/58572390299.jpg";
                $name = "Кроссовки FILA Trace Low";
                   $cost = 50 ;
               }else if ($id == 2){
                 $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/7e3/800_800_1/73111510299.jpg";
                 $name = "Панама Vans Level Up";
                 $cost = 15;
               }else if ($id == 3){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/212/800_800_1/73899270299.jpg";
                   $name= "Худи Demix для мальчиков";
                   $cost = 15;
               }else if ($id == 4){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/5be/800_800_1/74398680299.jpg";
                   $name= "Футболка Nike";
                   $cost = 50 ;
               }else if ($id == 5){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/b89/800_800_1/75152720299.jpg";
                   $name= "Кеды Vans";
                   $cost = 100 ;
               }else if ($id == 6){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/5ec/800_800_1/51069650299.jpg";
                   $name= "Брюки Adidas";
                   $cost = 50 ;
               }else if ($id == 7){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/800/800_800_1/74397220299.jpg";
                   $name= "Кроссовки New Balance 574";
                   $cost = 200 ;
               }else if ($id == 8){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/daa/800_800_1/52181690299.jpg";
                   $name= "Куртка The North Face";
                   $cost = 150;
               }else if ($id == 9){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/94a/800_800_1/73563260299.jpg";
                   $name= "Кеды Nike Court Vision Lo";
                   $cost = 50 ;
               }else if ($id == 10){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/1e7/800_800_1/75936620299.jpg";
                   $name= "Жилет утепленный adidas";
                   $cost = 100;
               }else if ($id == 11){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/5d8/800_800_1/64412170299.jpg";
                   $name= "Брюки Colambia";
                   $cost = 50;
               }else if ($id == 12){
                   $image = "https://img.ostin.com/upload/mdm/media_content/resize/01e/686_950_725a/75178590299.jpg";
                   $name= " Куртка женская";
                   $cost = 50;
               }else if ($id == 13){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/847/800_800_1/72821840299.jpg";
                   $name= "Куртка Kappa";
                   $cost = 85;
               }else if ($id == 14){
                   $image = "https://img.ostin.com/upload/mdm/media_content/resize/2af/686_950_f8a7/74902660299.jpg";
                   $name= "Хлопковая рубашка в полоску";
                   $cost = 25;
               }else if ($id == 15){
                   $image = "https://cdn.sportmaster.ru/upload/resize_cache/iblock/708/800_800_1/66364400299.jpg";
                   $name= "Шапка Columbia Lost Lager";
                   $cost = 15 ;
               }else if ($id == 16){
                   $image ="https://img.ostin.com/upload/mdm/media_content/resize/ff6/686_950_2323/67475060299.jpg" ;
                   $name= "Костюм женский";
                   $cost = 200;
               }else if ($id == 17){
                   $image = "https://vipavenue.ru/upload/catalog_photos/dbc/dbc221288a451786b76ee76e9da844e9.jpg";
                   $name= "Пуховик стеганный GUCCI";
                   $cost = 3000;
               }else if ($id == 18){
                   $image = "https://vipavenue.ru/upload/resize_cache/catalog_photos/d09/252_336_140cd750bba9870f18aada2478b24840a/d09243298bc7e9ab431071f7d26e414a.jpg";
                   $name= "Лоферы из КРОКОДИЛА ZILLI";
                   $cost = 10000;
               }
              
                ;?>
       
          
           <tr id="<?=$id?>">
                <td><img id="<?=$id?>" src="<?=$image?>" class="image"></td>
                <td> <?=$name?></td>
                <td><input type="number" class="count-product" id="<?=$id?>" value="<?=$kol?>"></td>
                <td><button class="btn btn-default btn-del" id="<?=$id?>">Удалить</button></td>
                <td id="<?=$id?>" class="cost-product" value="<?=$cost?>"><?=$cost?></td>
               <td id="<?=$id?>" class="itogcost"></td>
            </tr>
        
          <?php endforeach; ?>

     <tr>
        <td>Итоговая цена:</td>
        <td class="total-cost"></td>
    </tr>

</table>   
<?php endif; ?>
            </div>      
<?php endif; ?>   

 

<!-- Модальное окно(оформление)-->
<div id="buy"><button type="submit" id="buttonbuy"><a href="#popup" class="popup-link">Купить</a></button></div>
<div id="popup" class="popup">
      <a href="#header" class="popup_area"></a>
       <div class="popup_body">
         <div class="popup_content">
           <a href="#header" class="popup_close close_popup">X</a>
           <div class="popup_title">Оформление заказа</div>
            <form action="createOreder.php" method="post">
               <div class="form-fields">
    
                <div class="form-field">
                    <input type="text" placeholder="Введите имя" name="name">
                </div>
                <div class="form-field">
                    <input type="text" placeholder="Введите фамилию" name="surname">
                </div>
                <div class="form-field">
                    <input type="text" placeholder="Введите адрес доставки" name="adress">
                </div>
                <div class="form-field">
                    <input type="text" placeholder="Введите номер телефлна" name="number">
                </div>
                <button type="submit" class="button">Оформить</button>
               </div> 
               
            </form>
         </div>
       </div>
    </div>




<script src="jquery-2.2.3.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>       
<script>
    //изменение количества
        $('.count-product').change(function () { //изменение содержимого инпута     
        var col = $(this).val(); //получаем количество
        if (col<1){ col = 1; $(this).val(1); } //если ввели меньше 1 установим 1
        var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartamount.php',//куда передаем
            data: {col_tov: col, id_tov: id},//данные
            success: function() {//получаем результат
               //тут можно пересчитать сумму
                }
            });
        });
        //удаление товара
        

        $(document).on('click', '.btn-del', function() {
  var productId = $(this).attr('id'); // получаем id товара
  $.ajax({
    url: 'cartdel.php',
    type: 'POST',
    data: {product_id: productId},
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

$('.button').click(function () {//клип на кнопку
             var prices = document.querySelector('.total-cost').textContent; //получаем id этой кнопки
            $.ajax({//передаем ajax-запросом данные
            type: "POST", //метод передачи данных
            url: '/createOrder.php',//php-файл для обработки данных
            data: {price: prices},//передаем наши данные
            
            });
    });
        
            /* $('.btn-del').click(function () { //клик на кнопку     
          var id = $(this).attr('id'); //получаем id товара
            $.ajax({//аякс-запрос
            type: "POST",//метод
            url: 'cartdel.php',//куда передаем
            data: {id_tov: id},//данные
            success: function(data) {//получаем результат
             
            }
                
           });
        }); */
   
      
        
</script>
<script>

    // получаем элементы таблицы
const countElements = document.querySelectorAll('.count-product');
const costElements = document.querySelectorAll('.cost-product');
const itogPrice = document.querySelectorAll('.itogcost');
const costTotal = document.querySelector('.total-cost');


countElements.forEach((countElement, index) => {
  countElement.addEventListener('change', () => {
    const count = Number(countElement.value);
    const cost = parseFloat(costElements[index].textContent);
    let totalCost;
    if (count > 0 && count < 100) {
      totalCost = count * cost;
    } else if (count >= 100) {
      totalCost = 100 * cost;
    } else if (count <= 0) {
      totalCost = 1 * cost;
    }
    else{
      totalCost = 0;
    }
    itogPrice[index].textContent = totalCost.toFixed(2);

    let total = 0;
    itogPrice.forEach((price) => {
      total += parseFloat(price.textContent);
    });
    costTotal.textContent = total.toFixed(2);
    
  });
});
/*let totalCosts = 0;
itogPrice.forEach((ItogPrices) => {
   ItogPrices.addEventListener('change', ()=>{
        totalCost = 0; // сбрасываем значение общей стоимости перед каждым пересчетом
      totalCost += parseFloat(itogPrices.textContent);
       });
       costTotal.textContent = totalCosts.toFixed(2);
    });

// добавляем обработчик событий на изменение количества товаров
countElements.forEach((countElement, index) => {
  countElement.addEventListener('change', () => {
    // получаем количество товара и стоимость за единицу
    const count = Number(countElement.value);
    const cost = parseFloat(costElements[index].textContent);
    if(count > 0 && count <100){
    // вычисляем общую стоимость
    const totalCost = count * cost;
    
    // выводим общую стоимость в ячейку таблицы
    itogPrice[index].textContent = totalCost.toFixed(2);
  } else if(count >=100){
    const totalCost = 100 * cost;
    
    // выводим общую стоимость в ячейку таблицы
    itogPrice[index].textContent = totalCost.toFixed(2);
  } else if(count <=0){
    const totalCost = 1 * cost;
    
    // выводим общую стоимость в ячейку таблицы
    itogPrice[index].textContent = totalCost.toFixed(2);
  }
  totalCost = 0;
        ItogPrice.forEach((ItogPrices) => {
            totalCost += parseFloat(ItogPrices[index].textContent);
        });
        costTotal.textContent = totalCost.toFixed(2);
  });
}); */

</script>
<script>
/*const costTotal = document.querySelector('.total-cost');
const ItogPrice = document.querySelectorAll('.itogcost');
let totalCost = 0;
ItogPrice.forEach((ItogPrices) => {
           ItogPrices.addEventListener('change', ()=>{
        totalCost = 0; // сбрасываем значение общей стоимости перед каждым пересчетом
       ItogPrice.forEach((ItogPrices) => {
         totalCost += parseFloat(ItogPrices.textContent);
        });
        costTotal.textContent = totalCost.toFixed(2);
   })
});
*/
 

</script>
<script src="../jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../script.js"></script>
</body>
</html>