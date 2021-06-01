<?php


if (isset($_POST["phone"]) )
	{
    if ($_POST['phone'] == '')
    {
        echo 'Не заполнено поле Телефон';
        return; //проверяем наличие обязательных полей
    }
    $phone = htmlspecialchars(trim($_POST['phone']));
    mail("ivan5420@yandex.ru", "Заявка с сайта", "Телефон:".$phone ,"From: no-reply@test.com \r\n");
    echo 'Заявка отправлена. Спасибо!';
    	return;
    }
