<?php
if($_GET['Eliminar']){
	$ColorEliminar = $_GET['Eliminar'];
	function Eliminar($Eliminar){
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'prueba');
		$sql="delete from texto where id='$Eliminar';";
		$res=mysqli_query($conn,$sql);
		if($res){
			echo $Eliminar;
		}else{
			echo "no se elimino";
		}
	}
	Eliminar($ColorEliminar);
	
}else{
if(($_GET['texto'])==''){
	echo"No hay nada";
}else{
	$DatosTomado1= $_GET['texto'];
	$DatosTomado2= $_GET['valor'];
	function guardar($nombre,$valor){
	$conn=mysqli_connect('localhost','root','');
	mysqli_select_db($conn,'prueba');
	
	$sql= "insert into texto (texto,valor) values('$nombre','$valor');";
	$res=mysqli_query($conn,$sql);
	
	if($res){
		echo "Datos insertados";
	}else{
		echo "error al insertar";
		}	
	}
	guardar($DatosTomado1,$DatosTomado2);
	} 	
}
		header("Location:traer.html");	

?>