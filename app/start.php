<?php

ini_set("display_errors", 'On');

define('APP_ROOT', __DIR__);
define('BASE_URL', 'http://localhost:8888/cms');

$db = new PDO('mysql:host=localhost;dbname=cms1', 'root', 'root');
