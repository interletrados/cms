<?php

require 'app/start.php';

if (empty($_GET['page'])) {
	$page = false;
} else {
	var_dump($_GET);
}