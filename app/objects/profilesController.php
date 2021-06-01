<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/db.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/app/objects/profiles.php");


$database = new My_DB();

$db = $database->getConnect();

$profile = new Profiles($db);

$all_profiles = $profile->getAll();
