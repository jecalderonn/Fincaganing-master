<?php
	require '../aplicacion/reporte.php';

	if(isset($_POST['codigo']) && isset($_POST['extension']) && isset($_POST['ubicacion'])){
		
		$buscar=new Reporte();
		$buscar->anadirCorrales($_POST['codigo'], $_POST['extension'], $_POST['ubicacion']);
	}
?>