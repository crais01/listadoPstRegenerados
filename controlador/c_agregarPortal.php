<?php
include('../modelo/pst.php');
$portal = $_POST['por'];

$respPortal = agregarPortal(strtoupper($portal));
//echo $respPortal;
if($respPortal === 1){
    echo "agregado correctamente";
}else{
    echo "problemas al insertar registro";
}
?>