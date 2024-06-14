<?php
$id = $_POST['id_tov'];//получаем id товара

        session_start();
        if (!isset($_SESSION['favorites'])) {//если сесия избранное не существует
            $temp1[$id] = 1;//в масив заносим количество тавара 1 
        } else {//если в сесии избранном уже есть товары
            $temp1 = $_SESSION['favorites'];//заносим в масив старую сесию
            if (!array_key_exists($id, $temp1)) {
            $temp1[$id] = 1; 
            }      
        }
        
        $_SESSION['favorites'] = $temp1;
       