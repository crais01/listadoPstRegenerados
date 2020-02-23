<?php
include('db.php');

function traerPstRegenerados(){
    global $cnx;
    //$sql = "select pst,municipalidad,sistema,fecha_ingreso,motivo from ordencompra";
    $sql = "select 
    oc.pst,
    case when oc.municipalidad = m.id_municipalidad then m.nombre_municipalidad else 'sin nombre' end as 'municipalidad',
    case when oc.sistema= s.id_sistema then s.nombre_sistema else 'sin nombre' end as 'sistema',
    case when oc.portal= p.id_portal then p.nombre_portal else 'sin nombre' end as 'portal',
    oc.fecha_ingreso,oc.fecha_transaccion,oc.motivo,oc.placa_rol
    from ordencompra oc
    inner join municipalidad m on m.id_municipalidad = oc.municipalidad
    inner join portal p on p.id_portal = oc.portal
    inner join sistema s on s.id_sistema = oc.sistema
    order by  oc.fecha_ingreso desc";
    
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

function traerPortal(){
    global $cnx;
    $sql = "select id_portal,nombre_portal from portal";
    
    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}

function traerMunicipio(){
    global $cnx;
    $sql = "select id_municipalidad,nombre_municipalidad from municipalidad";
    
    $result = $cnx->query($sql);
    while($row = $result->fetch_array()){
        $a[] = $row;
    }

    return $a;
}

function agregarPst($pst,$sistema,$municipalidad,$motivo,$placaRol,$portal,$fecha_transaccion){
    global $cnx;
    $sql = "insert into ordencompra(pst,motivo,municipalidad,portal,sistema,placa_rol,fecha_transaccion)
            values('$pst','$motivo',$municipalidad,$portal,$sistema,'$placaRol','$fecha_transaccion')";

    //return $sql;
    if($cnx->query($sql) == true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}
function agregarPortal($portal){
    global $cnx;
    $sql = "insert into portal(nombre_portal)
            values('$portal')";

    //return $sql;
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}

function agregarSistema($sistema){
    global $cnx;
    $sql = "insert into sistema(nombre_sistema)
            values('$sistema')";

    //return $sql;
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}

function agregarMunicipalidad($nombre,$codigo){
    global $cnx;
    $sql = "insert into municipalidad(nombre_municipalidad,id_municipalidad)
            values('$nombre',$codigo)";

    //return $sql;
    if($cnx->query($sql) === true){
        return 1;
    }else{
        return 0;
    }
    $cnx->close();
}

?>