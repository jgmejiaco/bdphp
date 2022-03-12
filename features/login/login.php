<?php
    require_once("../../db".dirname(__DIR__)."/db_config.php");
    // require_once("../../".dirname(__DIR__)."/ApiRest/db/db_config.php");
    //D:\jgmejiaco1\Cesde\Software\Semestre3\Móviles2\ApiRest\features
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        print_r($_GET['name']);
        echo(dirname(__DIR__));
    }else{
        echo "papi paila";
    }