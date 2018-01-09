<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");

header("Content-Type: application/json");

function verColores(){
$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'prueba');
	$sql="select * from texto";
	$res=mysqli_query($conn,$sql);
	while($fila = mysqli_fetch_array($res)){
        $losColores[]= $fila;
    }
	return $losColores;
}
$res = verColores();

echo json_encode($res);
?>