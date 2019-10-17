<?php

include 'plantilla.php';
require 'conexion.php';

class Reporte extends Conexion{

    private $mostrarBusqueda='';

	function __construct() {
        parent::__construct();
    }

    function verInfoPersonal(){
    	$info="SELECT persona.nombre, persona.cedula, persona.telefono, rol.descripcion, persona.fechanac FROM rol JOIN persona on (rol.id=persona.id) WHERE persona.id=1";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
        	echo '<tr>';
            echo '<th>Nombre</th>';
            echo '<td>'.$valores['nombre'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Cedula</th>';
            echo '<td>'.$valores['cedula'].'</td>';
            echo '</tr>'; 
            echo '<tr>';
            echo '<th>Telefono</th>';
            echo '<td>'.$valores['telefono'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Cargo</th>';
            echo '<td>'.$valores['descripcion'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Fecha de Nacimiento</th>';
            echo '<td>'.$valores['fechanac'].'</td>';
            echo '</tr>'; 
        }
    }

    function verInfoPersonalTrabajador(){
        $info="SELECT persona.nombre, persona.cedula, persona.telefono, rol.descripcion, persona.fechanac FROM rol JOIN persona on (rol.id=persona.id) WHERE persona.id=2";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '<th>Nombre</th>';
            echo '<td>'.$valores['nombre'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Cedula</th>';
            echo '<td>'.$valores['cedula'].'</td>';
            echo '</tr>'; 
            echo '<tr>';
            echo '<th>Telefono</th>';
            echo '<td>'.$valores['telefono'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Cargo</th>';
            echo '<td>'.$valores['descripcion'].'</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Fecha de Nacimiento</th>';
            echo '<td>'.$valores['fechanac'].'</td>';
            echo '</tr>'; 
        }
    }

    function editarInformacion($nombre, $cedula, $telefono, $fechanac){
        $info="UPDATE persona SET nombre='$nombre', cedula='$cedula', telefono='$telefono', fechanac='$fechanac'
        WHERE id=1";

        $consulta=$this->mysqli->query($info);

        header('Location: ../presentacion/administrador/informacion/infopersonal.php');
    }  

    function cargarRazas(){
        $info="SELECT * FROM razas";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.$valores['descripcion'].'</option>';
        }
    } 

    function cargarEstado(){
        $info="SELECT * FROM estados";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.utf8_decode($valores['descripcion']).'</option>';
        }
    }

    function cargarCorrales(){
        $info="SELECT corral.id, corral.codigo AS codcorral FROM corral";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.utf8_decode($valores['codcorral']).'</option>';
        }
    }

    function cargarValores(){
        $info="SELECT * FROM valor";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.$valores['precio'].'</option>';
        }
    }

    function cargarRoles(){
        $info="SELECT * FROM rol";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<option value="'.$valores['id'].'">'.$valores['descripcion'].'</option>';
        }
    }

    function registrarAnimal($codigo, $fechanac, $raza, $estado, $corral, $valor){
        $info="INSERT INTO animal (id, codigo, fechanac, fechasac, raza, valor, estado, corral)
        VALUES (0, '$codigo', '$fechanac', null, $raza, $valor, $estado, $corral)";

        $consulta=$this->mysqli->query($info);

        header('Location: ../presentacion/administrador/registro y listado/listar.php');
    }

    function cargarInventario(){
         $info="SELECT animal.codigo, animal.fechanac, animal.fechasac, corral.codigo AS codcorral, corral.ubicacion, razas.descripcion, valor.precio, estados.descripcion AS produccion FROM animal JOIN corral ON (animal.corral=corral.id) JOIN valor ON (animal.valor=valor.id) JOIN razas ON (animal.raza=razas.id) JOIN estados ON (animal.estado=estados.id)";

         $consulta=$this->mysqli->query($info);

         while ($valores = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '<td>'.$valores['codigo'].'</td>';
            echo '<td>'.$valores['fechanac'].'</td>';
            echo '<td>'.$valores['fechasac'].'</td>';
            echo '<td>'.$valores['codcorral'].'</td>';
            echo '<td>'.$valores['ubicacion'].'</td>';
            echo '<td>'.$valores['descripcion'].'</td>';
            echo '<td>'.$valores['precio'].'</td>';
            echo '<td>'.$valores['produccion'].'</td>';
            echo '</tr>';
        }
    }

    function cargarPersonal(){
        $info="SELECT persona.nombre, persona.cedula, rol.descripcion AS cargo, persona.telefono, corral.codigo AS corral FROM persona
        JOIN rol ON (persona.cargo=rol.id) JOIN corral ON (persona.corral=corral.id)";

         $consulta=$this->mysqli->query($info);

         while ($valores = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '<td>'.$valores['nombre'].'</td>';
            echo '<td>'.$valores['cedula'].'</td>';
            echo '<td>'.$valores['cargo'].'</td>';
            echo '<td>'.$valores['telefono'].'</td>';
            echo '<td>'.$valores['corral'].'</td>';
            echo '</tr>';
        }
    }

    function mostrarCantidadAnimales(){
        $info="SELECT count(animal.codigo) AS cantidad, sum(valor.precio) AS precio 
        FROM animal JOIN valor ON (animal.valor=valor.id)";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '<th>Total Cantidad</th>';
            echo '<th>'.$valores['cantidad'].'</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<th>Valor Total Animales</th>';
            echo '<th>$ '.$valores['precio'].'</th>';
            echo '</tr>';
        }
    }

    function mostrarCantidadTrabajadores(){
        $info="SELECT count(persona.cargo) AS cantidad FROM persona JOIN rol ON (persona.cargo=rol.id)
        WHERE rol.descripcion='Capataz' OR rol.descripcion='Cuidador'";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '<th>Total Personal</th>';
            echo '<th>'.$valores['cantidad'].'</th>';
            echo '</tr>';
        }
    }

    function listarInfoCorral(){
        $info="SELECT codigo, extension, ubicacion, persona.nombre AS encargado, rol.descripcion AS cargo 
        FROM corral JOIN persona ON (corral.id=persona.corral) JOIN rol ON (persona.cargo=rol.id)";

        $consulta=$this->mysqli->query($info);

        while ($valores = mysqli_fetch_array($consulta)) {
            echo '<tr>';
            echo '<td>'.$valores['codigo'].'</td>';
            echo '<td>'.$valores['extension'].'</td>';
            echo '<td>'.$valores['ubicacion'].'</td>';
            echo '<td>'.$valores['encargado'].'</td>';
            echo '<td>'.$valores['cargo'].'</td>';
            echo '</tr>';
        }
    }

    function buscarAnimal($corral){
        $info="SELECT animal.codigo, animal.fechanac, animal.fechasac, corral.codigo AS codcorral, corral.ubicacion, 
        razas.descripcion, valor.precio, estados.descripcion AS produccion FROM animal JOIN corral ON (animal.corral=corral.id) 
        JOIN valor ON (animal.valor=valor.id) JOIN razas ON (animal.raza=razas.id) JOIN estados ON (animal.estado=estados.id) 
        WHERE corral.id=$corral";

        $consulta=$this->mysqli->query($info);

        $pdf = new Plantilla('L', 'mm', 'A4');
        
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFillColor(232, 232, 232);
        //$pdf->SetXY(10, 90);
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(34, 8, 'Codigo', 1, 0, 'L', 1);
        $pdf->Cell(34, 8, 'Nacimiento', 1, 0, 'L', 1);
        $pdf->Cell(34, 8, 'Sacrificio', 1, 0, 'L', 1);
        $pdf->Cell(34, 8, 'Corral', 1, 0, 'L', 1);
        $pdf->Cell(34, 8, 'Ubicacion', 1, 0, 'L', 1);
        $pdf->Cell(34, 8, 'Raza', 1, 0, 'L', 1);
        $pdf->Cell(34, 8, 'Precio', 1, 0, 'L', 1);
        $pdf->Cell(36, 8, 'Produccion', 1, 1, 'L', 1);

        $pdf->SetFont('Arial', 'B', 10);

        while ($row = $consulta->fetch_assoc()){
            $pdf->Cell(34, 8, utf8_decode($row['codigo']), 1, 0, 'L');

            $pdf->Cell(34, 8, utf8_decode($row['fechanac']), 1, 0, 'L');

            $pdf->Cell(34, 8, utf8_decode($row['fechasac']), 1, 0, 'L');

            $pdf->Cell(34, 8, utf8_decode($row['codcorral']), 1, 0, 'L');

            $pdf->Cell(34, 8, utf8_decode($row['ubicacion']), 1, 0, 'L');

            $pdf->Cell(34, 8, utf8_decode($row['descripcion']), 1, 0, 'L');

            $pdf->Cell(34, 8, utf8_decode($row['precio']), 1, 0, 'L');

            $pdf->Cell(36, 8, utf8_decode($row['produccion']), 1, 1, 'L');
        }

        $pdf->Output();
        $consulta->close();
        $this->mysqli->close();
    }

    public function registrarPersonal($nombre, $cedula, $cargo, $corral, $fechanac, $telefono){
        $info="INSERT INTO persona (id, cargo, nombre, cedula, telefono, fechanac, corral)
        VALUES (0, $cargo, '$nombre', '$cedula', '$telefono', '$fechanac', $corral)";

        $consulta=$this->mysqli->query($info);

        header('Location: ../presentacion/administrador/registro y listado/listarpersonal.php');
    }

    function anadirCorrales($codigo, $extension, $ubicacion){
        $info="INSERT INTO corral (id, codigo, extension, ubicacion) 
        VALUES (0, '$codigo', '$extension', '$ubicacion')";
        
        $consulta=$this->mysqli->query($info);

        header('Location: ../presentacion/administrador/registro y listado/infocorrales.php');
    }

}
?>