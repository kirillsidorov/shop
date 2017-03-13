<?php

$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

echo 'подключаемый php файл (Контроллер) =' . $controllerName . '<br />';

$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

echo 'Функция формирующая страницу '  . $actionName . '<br />';

include_once ('../controllers/' . $controllerName . 'Controller.php');

$function = $actionName . 'Action';

echo 'Полное название функции ' . $function . '<br />';

$function();