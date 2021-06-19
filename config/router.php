<?php

$uri = getRequestPath();






if($uri === '/')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/main.php");
elseif($uri === '/osteklenie-balkonov-i-lodzhij-v-voronezhe')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/balkon.php");
elseif($uri === '/okna-dlya-kottedzhej-i-zagorodnyh-domov-v-voronezhe')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/kottedzh.php");
elseif($uri === '/proizvodstvo-okon-v-voronezhe')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/zavod.php");
elseif($uri === '/otdelka-i-uteplenie-balkonov-i-lodzhij-v-voronezhe')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/uteplenie.php");
elseif($uri === '/detskiye-zamki-na-okna')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/deti.php");
elseif($uri === '/ustanovka-plastikovyh-okon')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/montazh.php");
elseif($uri === '/akcii-i-skidki-na-plastikovye-okna')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/akcii.php");
elseif($uri === '/kontakty')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/kontakty.php");
elseif($uri === '/czeny-na-okna-v-voronezhe')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/ceni-okna.php");
elseif($uri === '/okonnye-profili-rehau')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/profile.php");
elseif($uri === '/okonnye-profili-rehau/rehau-blitz')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/template-profile.php");
elseif($uri === '/okonnye-profili-rehau/rehau-grazio')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/template-profile.php");
elseif($uri === '/okonnye-profili-rehau/rehau-brillant')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/template-profile.php");
elseif($uri === '/okonnye-profili-rehau/rehau-delight')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/template-profile.php");
elseif($uri === '/okonnye-profili-rehau/rehau-geneo')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/template-profile.php");
elseif($uri === '/okonnye-profili-rehau/rehau-intellio')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/template-profile.php");
elseif($uri === '/privacy-policy')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/privacy-policy.php");
elseif($uri === '/thank-you-page')
    require($_SERVER['DOCUMENT_ROOT']. "/app/pages/thank-you-page.php");
else
    require($_SERVER['DOCUMENT_ROOT']. "/app/templates/404.php");





function getRequestPath() {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return '/' . ltrim(str_replace('index.php', '', $path), '/');
    }
