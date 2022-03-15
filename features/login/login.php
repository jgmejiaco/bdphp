<?php
    require_once(dirname(__DIR__)."../../db/db_config.php");
    // require_once("../../".dirname(__DIR__)."/ApiRest/db/db_config.php");
    //D:\jgmejiaco1\Cesde\Software\Semestre3\Móviles2\ApiRest\features
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        // print_r($_GET['name']);
        // echo(dirname(__DIR__));
        $identification = $_GET['identification'];
        $db = new DBConfig();
        $dbConnection = $db->connect();
        $query = "SELECT * FROM users";
        $users = $dbConnection->query($query)->fetchAll(PDO::FETCH_ASSOC);
        // print_r($users);
        // $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo(json_encode($users));
    }else{
        echo "no hay forma de recuperar datos de la BD";
    }