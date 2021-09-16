<?php

$_POST = json_decode(file_get_contents('php://input'), true);

if (isset($_POST["phone"]) )

	{
    if ($_POST['phone'] == '')
    {
        echo 'Не заполнено поле Телефон';
        return; //проверяем наличие обязательных полей
    }
    $phone = strip_tags(trim($_POST['phone']));
    $floorType = strip_tags(trim($_POST['floorType']));
	$matType = strip_tags(trim($_POST['matType']));
	$profileName = strip_tags(trim($_POST['profileName']));
	$winWidth = strip_tags(trim($_POST['winWidth']));
	$winHeight = strip_tags(trim($_POST['winHeight']));
	$winType = strip_tags(trim($_POST['winType']));

    mail("ivan5420@yandex.ru", "Заявка с сайта",

         "Тип помещения: " . $floorType . "\n"
        . "Материал стен: " . $matType . "\n"
        . "Тип остекления: " . $winType . "\n"
        . "Профиль: " . $profileName . "\n"
        . "Ширина: " . $winWidth ."\n"
        . "Высота: " . $winHeight . "\n \n"
        . "Телефон: ".$phone . "\n"


        ,"From: lead@vseokna36.ru \r\n");

        mail("cla55ik@yandex.ru", "Заявка с сайта",

             "Тип помещения: " . $floorType . "\n"
            . "Материал стен: " . $matType . "\n"
            . "Тип остекления: " . $winType . "\n"
            . "Профиль: " . $profileName . "\n"
            . "Ширина: " . $winWidth ."\n"
            . "Высота: " . $winHeight . "\n \n"
            . "Телефон: ".$phone . "\n"


            ,"From: lead@vseokna36.ru \r\n");
        echo 'Заявка отправлена. Спасибо!';

    }

/*
if ($_POST["phone"]) {
    header('Content-Type: application/json');
    print json_encode(array('data' => rand(0, 10)));
}
*/



echo $msg;
