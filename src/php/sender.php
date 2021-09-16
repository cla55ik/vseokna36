<?php


if (isset($_POST["phone"]) )
	{
    if ($_POST['phone'] == '')
    {
        echo 'Не заполнено поле Телефон';
        return; //проверяем наличие обязательных полей
    }
    $phone = strip_tags(trim($_POST['phone']));
    mail("ivan5420@yandex.ru", "Заявка с сайта", "Телефон:".$phone ,"From: lead@vseokna36.ru \r\n");
	mail("cla55ik@yandex.ru", "Заявка с сайта", "Телефон:".$phone ,"From: lead@vseokna36.ru \r\n");
    echo 'Заявка отправлена. Спасибо!';
    	return;
    }
