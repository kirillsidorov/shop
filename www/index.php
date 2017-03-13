<?php

include_once '../config/config.php';
include_once '../library/mainFunctions.php';

//set which controller we will work
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

//set which function will work
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($controllerName, $actionName);

