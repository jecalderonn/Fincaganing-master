<?php
	require '../aplicacion/reporte.php';

	if(isset($_POST['nombre']) && isset($_POST['cedula']) && isset($_POST['rol']) && isset($_POST['corral']) && isset($_POST['fechanacimiento']) && isset($_POST['telefono'])){
		
		$buscar=new Reporte();
		$buscar->registrarPersonal($_POST['nombre'], $_POST['cedula'], $_POST['rol'], $_POST['corral'], $_POST['fechanacimiento'], $_POST['telefono']);
	}
?>