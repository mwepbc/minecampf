<?php
$login = $_POST['login']; // запись данных в переменную
$password = $_POST['password']; // запись данных в переменную
if($login != ''){
    echo json_encode(["result"=>$login]); // возврат ответа обрано на старницу
}
else{
    echo json_encode(["result"=>"Логин не может быть пустым"]);
}