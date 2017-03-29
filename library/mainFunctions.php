<?php

/**
 * Create the requested page
 *
 * @param string $controllerName - controller name
 * @param string $actionName - name of processing function
 */

function loadPage($smarty , $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty );
}

/*
 * Load template
 *
 * @param object $smarty
 * @param string $templateName
 */

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName.TemplatePostfix);
}

/*
 * Function debug. Stop program and output variable
 *
 * @param variant $value variable for output her on the Page
 */

function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo'</pre>';
}