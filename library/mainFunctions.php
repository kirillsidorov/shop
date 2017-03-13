<?php

/**
 * Create the requested page
 *
 * @param string $controllerName - controller name
 * @param string $actionName - name of processing function
 */

function loadPage($controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function();
}