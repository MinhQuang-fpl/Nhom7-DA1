<?php
function connecsion (){
    try{
        $hostname= HOSTNAME;
        $username= USERNAME;
        $password= PASSWORD;
        $dbname=DBNAME;
        $port=PORT;
    
    $conn= new PDO("mysql:host=$hostname; dbname=$dbname; port=$port; charset=utf8",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $conn;
    } catch(PDOException $e){
        echo"loi ket noi".$e->getMessage();
    }
}
function views($view, $data=[]){
    extract($data);
    include_once "Views/$view.php";
}