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
	$matType = htmlspecialchars(trim($_POST['matType']));
	$profileName = htmlspecialchars(trim($_POST['profileName']));
	$winWidth = htmlspecialchars(trim($_POST['winWidth']));
	$winHeight = htmlspecialchars(trim($_POST['winHeight']));
	$winType = htmlspecialchars(trim($_POST['winType']));

    mail("ivan5420@yandex.ru", "Заявка с сайта",

         "Тип помещения: " . $floorType . "\n"
        . "Материал стен: " . $matType . "\n"
        . "Тип остекления: " . $winType . "\n"
        . "Профиль: " . $profileName . "\n"
        . "Ширина: " . $winWidth ."\n"
        . "Высота: " . $winHeight . "\n \n"
        . "Телефон: ".$phone . "\n" 


        ,"From: no-reply@test.com \r\n");
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
