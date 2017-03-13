<?php

//Constants for  calling to controllers
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//Template used
$template = 'default';

//paths to files of templates(*.tpl)
define('TemplatePrefix', "../views/($template)/");
define('TemplatePostfix', '.tpl');

//paths to files of templates in web space
define('TemplateWebPath', "/templates/{$template}/");

//init Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
