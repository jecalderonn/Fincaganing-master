<?php
	require '../aplicacion/reporte.php';

	if(isset($_POST['buscar']) && isset($_POST['corral'])){
		$buscar=new Reporte();
		$buscar->buscarAnimal($_POST['corral']);
	}
?>