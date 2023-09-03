<?php
header("Content-Type: text/html; charset-utf-8");

if(isset($_POST['name'])) {

    $email = "sfotkal.ru@gmail.com";
    $title = "набор сумок 39р";

    $text = "Информация о покупателе:
    
    Имя: ".$_POST['name']."
    Телефон: ".$_POST['phone']."

    Время заказа: ".date("Y-m-d H:i:s");

    if(mail($email, $title, $text)) {
        header('Location: https://supermagazin.online/nabor-sumok/');
    } else {
    echo "Ошибка. Возможно функция email отключена. Обратитесь к хостинг-провайдеру или возьмите консультацию на сайте, где купили шаблон";
} else {
echo "Ошибка" 
}
}
?>