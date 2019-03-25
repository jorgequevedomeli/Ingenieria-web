<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    /*
    // Conexion a la base de datos en localhost
    $user = "root";
    $password = "root";
    $db = "carritotpweb";
    $host = "localhost";
    $port = 8888;

    $conn = new mysqli($host,$user,$password,$db);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    */

    
    // Conexion a la base de datos de heroku
    $conn_string = "host=ec2-54-225-95-183.compute-1.amazonaws.com port=5432 dbname=d5opu7ou0j7j9p user=arnsbnwzexbcsz password=27e8d3c5a51945ea73c500968107e4b61aaddb8edba3cd8107640122a1bc870e";
    $dbconn4 = pg_connect($conn_string) or die("Error al conectar a la base de datos");
    pg_exec($dbconn4,"CREATE TABLE carritogibson(id INT,orientation TEXT,nombre TEXT,imagen TEXT,precio DOUBLE,PRIMARY KEY(id))");
    /*
    pg_query($dbconn4,"INSERT INTO prueba VALUES (17)");
    $re = pg_query($dbconn4,"SELECT * FROM prueba");
    $re = pg_fetch_all($re);
    print_r($re);
    echo $re[3]["edad"];
    */
?>