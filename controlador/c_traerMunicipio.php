<?php


$resMunicipio = traerMunicipio();

if(is_null($resMunicipio)){
    echo "<option>no existen municipios</option>";
}else{
    foreach($resMunicipio as $row)
    {
        echo "<option value='".$row['codigo_municipalidad']."'>".$row['nombre_municipalidad']."</option>";
    }

}

?>