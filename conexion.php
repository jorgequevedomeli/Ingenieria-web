<?php
    /*$server = "localhost";
    $username = "jorge";
    $password = "i77ljakDEOxiHHvj";
    $db = "carritotpweb";
    $con = mysql_connect($server,$username,$password) or die("No se ha podido establecer la conexion");
    $sdb = mysql_select_db($db,$con) or die("La base de datos no existe");
    */
    $conn_string = "host=ec2-54-225-95-183.compute-1.amazonaws.com port=5432 dbname=d5opu7ou0j7j9p user=arnsbnwzexbcsz password=27e8d3c5a51945ea73c500968107e4b61aaddb8edba3cd8107640122a1bc870e";
    $dbconn4 = pg_connect($conn_string) or die("ERROR!!!!!");
    pg_query($dbconn4,"create table prueba(int dato)");
    pg_query($dbconn4,"insert into prueba values (15)");
    $re = pg_query("select * from prueba");
    print_r($re);
    echo "SIIIIIIII";
?>