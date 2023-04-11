<?php
    $host = '127.0.0.1';
    $db = 'alternakraft';
    $user='root';
    $pass='';
    $charset = 'utf8mb4';
    //data source name
    $dsn =  "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Hello Database';

    } catch(PDOException $e){
        // echo "<h1 class='text-danger'>No Database Found</h1>";
        throw new PDOException($e->getMessage());
    }


    require_once 'crud.php';
    $crud = new crud($pdo);


?>
