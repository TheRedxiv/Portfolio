<?php
echo "<h1>Datos recibidos desde el formulario</h1>";
echo "Inicio de sesión: ".$_POST['sesion']."<br/>";
echo "Contraseña: ".$_POST['pass']."<br/>";
echo "Repetición de contraseña: ".$_POST['pass2']."<br/>";
echo "Indicio de contraseña: ".$_POST['indicio']."<br/>";
if (isset($_POST['privacidad'])){
	echo "Opta por privacidad";	
}
?>