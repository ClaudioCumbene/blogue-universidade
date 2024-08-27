<?php
    // Coxecao com base de daos, USANDO PDO
try{

    $host= "localhost";
    $dbname="ensino_superior";
    $user="root";
    $pass="";

    $conn= new PDO("mysql:host=$host;dbname=$dbname", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo $e->getMessage();
}


?>