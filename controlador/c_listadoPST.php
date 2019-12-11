<?php
include('../modelo/pst.php');

$resPST = traerPstRegenerados();

if(is_null($resPST)){
    echo "no existen registros";
}else{
    foreach($resPST as $row)
    {
    echo "<tr>";
    echo "<td>".$row['muni']."</td>";
    echo "<td>".$row['sis']."</td>";
    echo "<td>".$row['pst']."</td>";
    echo "<td>".$row['fecha_ingreso']."</td>";
    echo "<td>".$row['motivo']."</td>";
    echo "</tr>";
    }

}

?>