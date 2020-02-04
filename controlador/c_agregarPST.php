<?php
include('../modelo/pst.php');

$pst = $_POST['pst'];
$sistema = $_POST['sis'];
$municipalidad = $_POST['muni'];
$motivo = $_POST['motivo'];
$placaRol = $_POST['pr'];
$portal = $_POST['por'];
$fecha_transaccion = $_POST['ft'];

$resultadoPST = agregarPst($pst,$sistema,$municipalidad,$motivo,$placaRol,$portal,$fecha_transaccion);
/*echo $resultadoPST;
return;*/
if($resultadoPST === 1){
    echo "agregado correctamente";
}else{
    echo "problemas al insertar registro";
}

?>