<?php

function testAction(){
    echo 'IndexController.php > testAction';
}

function indexAction($smarty){
    //echo 'indexAction function';
    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'index');
}