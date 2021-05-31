<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/db.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/app/objects/akcii.php");


$database = new My_DB();

$db = $database->getConnect();

$akcya = new Akcii($db);

$all_akcii = $akcya->getAll();
