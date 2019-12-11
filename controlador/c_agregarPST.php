<?php
include('../modelo/pst.php');

$pst = $_POST['pst'];
$sistema = $_POST['sis'];
$municipalidad = $_POST['muni'];
$motivo = $_POST['motivo'];

$resultadoPST = agregarPst($pst,$sistema,$municipalidad,$motivo);
/*echo $resultadoPST;
return;*/
if($resultadoPST === 1){
    echo "agregado correctamente";
}else{
    echo "problemas al insertar registro";
}

?>