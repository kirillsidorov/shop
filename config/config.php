<?php

//Constants for  calling to controllers
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//Template used
$template = 'default';
//absolut path
define('AbsolutePath', 'C:/xampp/htdocs/shop.local');

//paths to files of templates(*.tpl)
define('TemplatePrefix', "/views/default/");
define('TemplatePostfix', '.tpl');

//paths to files of templates in web space
define('TemplateWebPath', "/templates/{$template}/");

//init Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(AbsolutePath.TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

//** раскомментируйте следующую строку для отображения отладочной консоли
//$smarty->debugging = true;

$smarty->assign('templateWebPath', TemplateWebPath);
