<?php


$resMunicipio = traerMunicipio();

if(is_null($resMunicipio)){
    echo "<option>no existen municipios</option>";
}else{
    foreach($resMunicipio as $row)
    {
        echo "<option value='".$row['id_municipalidad']."'>".$row['nombre']."</option>";
    }

}

?>