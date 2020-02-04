<?php

$resSistema = traerSistema();

if(is_null($resSistema)){
    echo "<option>sin sistemas registrados</option>";
}else{
    foreach($resSistema as $row)
    {
        echo "<option value='".$row['id_sistema']."'>".$row['nombre_sistema']."</option>";
    }

}

?>