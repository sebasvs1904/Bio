<?php 
	//conectarnos con servidor
include ('modelo/conectar.php');

	//recuperar las variables
	
	$idcli=6;
	$nombre=$_POST['nombre'];
	$ApePat=$_POST['ApePat'];
	$ApeMat=$_POST['ApeMat'];
	$user=$_POST['user'];
	$FechaNac=$_POST['FechaNac'];
	$Telefono=$_POST['Telefono'];
	$e_mail=$_POST['correo'];
	$Password=$_POST['Password'];

	$iddireccion=6;
	$calle=$_POST['calle'];
	$municipio=$_POST['municipio'];
	$cp=$_POST['CP'];
	$estado=$_POST['estado'];
	$numero=$_POST['numero'];

	$idtarje=6;
	$Numeracion=$_POST['Numeracion'];
	$CVV=$_POST['CVV'];
	$FechaVenc=$_POST['FechaVenc'];

	//hacemos la secuencia sql
	$sql="INSERT INTO direccion VALUES ('$iddireccion','$calle','$municipio','$cp','$estado','$numero')";
		//hacemos la secuencia sql
	$sql1="INSERT INTO cliente  VALUES ('$idcli','$nombre','$ApePat','$ApeMat','$user','$FechaNac','$Telefono','$e_mail','$Password','$iddireccion')";
	//hacemos la secuencia sql
	$sql2="INSERT INTO tarjeta  VALUES ('$idtarje','$Numeracion','$CVV','$FechaVenc','$idcli')";

	$ejecutar=$link->query($sql);
	$ejecutar=$link->query($sql1) ;
	$ejecutar=$link->query($sql2); 

	//verificamos la ejecucion
	if(!$ejecutar){
		echo "Hubo algun error";
	}else{
		echo "datos guardados correctamente <br><a href='index.php'>volver</a>";
	}
?>


 