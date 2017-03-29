<?php

include_once '../config/config.php';// инициализация настроек
//include_once '../config/db.php';//инициализация базы данных
include_once '../library/mainFunctions.php';// основные функции

//set which controller we will work
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//set which function will work
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($smarty, $controllerName, $actionName);

