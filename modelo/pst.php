<?php
include('db.php');

function traerPstRegenerados(){
    global $cnx;
    //$sql = "select pst,municipalidad,sistema,fecha_ingreso,motivo from ordencompra";
    $sql = "select 
    oc.pst,oc.municipalidad,
    case
        when oc.municipalidad = m.id_municipalidad then m.nombre
        else 'sin nombre'
    end as 'muni',
    oc.sistema,
    case
        when oc.sistema= s.id_sistema then s.nombre_sistema
        else 'sin nombre'
    end as 'sis',
    oc.fecha_ingreso,oc.motivo 
    from ordencompra oc
    inner join municipalidad m on m.id_municipalidad = oc.municipalidad
    inner join sistema s on s.id_sistema = oc.sistema";
    
    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}

function traerSistema(){
    global $cnx;
    $sql = "select id_sistema,nombre_sistema from sistema";
    
    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}

function traerMunicipio(){
    global $cnx;
    $sql = "select id_municipalidad,nombre from municipalidad";
    
    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}

function agregarPst($pst,$sistema,$municipalidad,$motivo){
    global $cnx;
    $sql = "insert into ordencompra(pst,sistema,municipalidad,motivo)
            values('$pst',$sistema,$municipalidad,'$motivo')";

    //return $sql;
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}

?>