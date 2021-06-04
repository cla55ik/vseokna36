<?php

$_POST = json_decode(file_get_contents('php://input'), true);

if (isset($_POST["phone"]) )

	{
    if ($_POST['phone'] == '')
    {
        echo 'Не заполнено поле Телефон';
        return; //проверяем наличие обязательных полей
    }
    $phone = htmlspecialchars(trim($_POST['phone']));
    $floorType = htmlspecialchars(trim($_POST['floorType']));
    mail("ivan5420@yandex.ru", "Заявка с сайта", "Телефон:".$phone . "<br />" . "Тип" . $floorType ,"From: no-reply@test.com \r\n");
    echo 'Заявка отправлена. Спасибо!';
    	return;
    }

/*
if ($_POST["phone"]) {
    header('Content-Type: application/json');
    print json_encode(array('data' => rand(0, 10)));
}
*/



echo $msg;
