<?php
include('../modelo/pst.php');

$resPortal = traerPortal();
//print_r($resPortal);
if(is_null($resPortal)){
    echo "<option>sin sistemas registrados</option>";
}else{
    foreach($resPortal as $row)
    {
        echo "<option value='".$row['id_portal']."'>".$row['nombre_portal']."</option>";
    }

}

?>