<?php
use Framework\Database;

$config = require basePath('config/db.php');
$db = new Database($config);

$listings = $db->query('SELECT * FROM listings LIMIT 12')->fetchAll();

loadView('listings/index', [
    'listings' => $listings
]);
