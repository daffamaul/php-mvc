<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['flash'])) session_start();

require_once '../app/init.php';

$app = new App;
