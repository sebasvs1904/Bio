<?php 
	//conectarnos con servidor
include ('modelo/conectar.php');
$usuario= $_POST['user'];
$con= $_POST['password'];
$tipo=$_POST['Opcion'];
$q="SELECT COUNT(idcliente) as contar FROM cliente WHERE nombreusuario='$usuario' and contraseña='$con'
";
$ejecutar=$link->query($q);
$array=mysqli_fetch_array($ejecutar);
if($array[contar]>0){
	if($tipo=='value1')
			echo "Bienvenido a Biplant Cliente";
		else 
			echo "Bienvenido a Bioplant";

}
else{

	echo "<script> alert('Datos ingresados son incorrectos o el nombre de usuario no corresponde a la contraseña')</script>";
}

