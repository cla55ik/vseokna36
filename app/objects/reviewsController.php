<?php

include_once ($_SERVER['DOCUMENT_ROOT']. "/config/db.php");
include_once ($_SERVER['DOCUMENT_ROOT']. "/app/objects/reviews.php");


$database = new My_DB();

$db = $database->getConnect();

$review = new Reviews($db);

$all_reviews = $review->getAll();
