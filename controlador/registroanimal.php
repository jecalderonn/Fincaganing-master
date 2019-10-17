<?php
	require '../aplicacion/reporte.php';

	if(isset($_POST['codigo'])&& isset($_POST['fechanacimiento']) && isset($_POST['raza']) && isset($_POST['estado']) && isset($_POST['corral']) && isset($_POST['valor'])){
		
		$registraranimal=new Reporte();
		$registraranimal->registrarAnimal($_POST['codigo'], $_POST['fechanacimiento'], $_POST['raza'], $_POST['estado'], $_POST['corral'] ,$_POST['valor']);
	}
?>