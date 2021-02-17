<?php

include_once(__DIR__ . '/../config.php');
include_once(__DIR__ .'/../vendor/autoload.php');

$connector = new \API\Views\connector\PdoConnector();

$pdo = $connector->getConnector();

$initialQuery = "CREATE TABLE IF NOT EXISTS `views` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$pdo->exec($initialQuery);