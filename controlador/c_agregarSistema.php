<?php
include('../modelo/pst.php');
$sistema = $_POST['sis'];

$respSistema = agregarSistema(strtoupper($sistema));
//echo $respPortal;
if($respSistema === 1){
    echo "agregado correctamente";
}else{
    echo "problemas al insertar registro";
}
?>