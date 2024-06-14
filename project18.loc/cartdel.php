<?php







session_start();

// получаем id товара, который нужно удалить
$product_id = $_POST['product_id'];

// удаляем товар из сессии
unset($_SESSION['cart'][$product_id]);

// отправляем ответ в формате JSON
//echo json_encode(['success' => true]);
$response = array('success' => true);
echo json_encode($response);


/*
$id = $_POST['id_tov'];
session_start(); 
function removeProductFromCart($el){
    
    $temp = $_SESSION['cart'];
    if(isset($temp)&& isset($temp[$el])){
        unset($temp[$el]);
    }
    $_SESSION['cart'] = $temp; //сохраняем сессию
}

removeProductFromCart($id);










//сначала стартуем сессию
if(isset($_POST['id_tov'])) { //проверяем, передан ли id товара
    $id = $_POST['id_tov']; //если да, то получаем его
    if(isset($_SESSION['cart'][$id])) { //проверяем, есть ли такой товар в корзине
        $_SESSION['cart'][$id]['quantity']--; //если есть, уменьшаем количество на 1
        if($_SESSION['cart'][$id]['quantity'] == 0) { //если количество стало равным нулю, удаляем товар из корзины
            unset($_SESSION['cart'][$id]);
        
        }
    }
}
/*
function removefromcartAction(){
    $item = isset($_POST['id_tov']) ? intval($_POST['id_tov']) : null;
     if(! $item) exit();

     $restData= array();
     $key = array_search($item, $_SESSION['cart']);
     if($key !== false){
        unset($_SESSION['cart'][$key]);
        $restData['success'] = 1;
        $restData['cntItems'] = count($_SESSION['cart']);
     } else {
        $restData['success'] = 0 ;
     }
     echo json_encode($restData);
    }
$_SESSION['cart'] ;


$id = $_POST['id_tov'];//получаем id
session_start(); //стартуем сессию
$temp = $_SESSION['cart']; //переносим сессию во временную переменную
   if ($temp){
       unset($temp[$id]);//удаляем запись
      }
$_SESSION['cart'] = $temp; //сохраняем сессию
*/

?>


