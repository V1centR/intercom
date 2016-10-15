<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_erros', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('America/Sao_Paulo');
    session_start();

    require_once '/master/otn/projeto1/module/Application/src/Application/Controller/Loader.php';
    require_once '/master/otn/projeto1/module/Application/src/Application/Controller/AjaxController.php';

    //Application\Controller\Loader::autoLoader();
    echo Application\Controller\AjaxController::main();
?>
