<?php

session_start();
$_SESSION['login'] = 'guest';

require_once "core/App.php";
require_once "core/Controller.php";
require_once "core/Database.php";

require_once "config/config.php";
