<?php
include('../modelo/pst.php');
$codigo = $_POST['codmun'];
$municipio = $_POST['nommun'];

$respMunicipio = agregarMunicipalidad(strtoupper($municipio),$codigo);
//echo $respPortal;
if($respMunicipio === 1){
    echo "agregado correctamente";
}else{
    echo "problemas al insertar registro";
}
?>