<?php



session_start();

// получаем id товара, который нужно удалить
$product_id = $_POST['id_tov'];

// удаляем товар из сессии
unset($_SESSION['favorites'][$product_id]);

// отправляем ответ в формате JSON
//echo json_encode(['success' => true]);
$response = array('success' => true);
echo json_encode($response);

?>