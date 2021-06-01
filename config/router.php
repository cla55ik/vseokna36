<?php

$uri = getRequestPath();






if($uri === '/')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/main.php");
elseif($uri === '/balkon')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/balkon.php");
else
    require($_SERVER['DOCUMENT_ROOT']. "/app/templates/404.php");





function getRequestPath() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return '/' . ltrim(str_replace('index.php', '', $path), '/');
    }