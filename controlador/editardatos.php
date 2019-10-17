<?php
	require '../aplicacion/reporte.php';

	if(isset($_POST['nombre'])&& isset($_POST['cedula']) && isset($_POST['telefono']) && isset($_POST['fechanacimiento'])){
		$editarinfo=new Reporte();
		$editarinfo->editarInformacion($_POST['nombre'], $_POST['cedula'], $_POST['telefono'], $_POST['fechanacimiento']);
	}
?>