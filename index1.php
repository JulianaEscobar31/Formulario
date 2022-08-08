<?php
require_once('./database/Conexion.php');

require_once('./class/Producto.php');


//validar si la informacion viene por metodo post. isset($variable) verdaero si es distinto de vacio o null

if (isset($_POST)){
    echo "estoy usando metodo post";
    //validar que no existan campos vacios "" o NULL. if == Null || == "" || " "
    
    if($_POST['nombre'] == "" || $_POST['fechacaducidad'] == "" || $_POST['codigo'] == "" || $_POST['precio'] == "" || $_POST['cantidad'] == ""){
        echo "Existen campos vacíos";
    }else{
        $pr = new Producto(NULL, $_POST['nombre'], $_POST['fechacaducidad'], $_POST['codigo'],$_POST['precio'] ,$_POST['cantidad']);
        
        //validar que no se repita el codigo de producto. usar otro codigo sql para buscar si existe un producto con ese codigo
        //en la base de datos. SELECT * FROM TABLA where id=1; distinto de vacio si existe un registro con esta condicion
        $sql = "SELECT * FROM tbl_products where código='".$_POST['codigo']."';";
        $res = $base->query($sql);

        if($res->num_rows==0){
            echo "Este producto no existe, puede ser ingresado";
            $sql = "INSERT INTO tbl_products VALUES (NULL,'".$pr->gettipo()."',"."'".$pr->getfechaCad()."',"."'".$pr->getcodigo()."',". $pr->getpUnitario().",".$pr->getcantidad().")";
            $resultado = $base->query($sql);
            //validar la ejecucion del query de SQL. $resultado me da un valor booleano

            if($resultado){
                echo "producto ingresado";
            }
        }else{
            echo "Este producto ya existe";
        }
                
        
    }
}






// while($fila = $res->fetch_assoc()){
//     //var_dump($fila);
//     echo $fila['ID'].'<br>';
// }



//var_dump($resultado);
//header('location:index.html');
//var_dump($_POST);
