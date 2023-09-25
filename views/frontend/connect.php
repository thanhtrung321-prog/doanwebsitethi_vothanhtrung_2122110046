<?php
function connection(){
    $severname = "localhost";
    $username ="root";
    $password = "";
    $database = "webbangiay";

$connect = new mysqli($severname,$username,$password,$database);
return $connect;
}
?>