<?php
require_once('./database/Conexion.php');

require_once('./class/Producto.php');

$pr = new Producto(NULL, "lácteo", "2022-05-22", "A25D84R5641",2.50 ,2);
$sql = "INSERT INTO tbl_products VALUES (NULL,'".$pr->gettipo()."',"."'".$pr->getfechaCad()."',"."'".$pr->getcodigo()."',". $pr->getpUnitario().",".$pr->getcantidad().")";
$resultado = $base->query($sql);
var_dump($resultado);