<?php
class Producto{
    private $id;
    private $tipo;
    private $fechaCad;
    private $codigo;
    private $pUnitario;
    private $cantidad;

    public function __construct($id, $tipo, $fechaCad, $codigo, $pUnitario, $cantidad){
        $this -> id  = $id;
        $this -> tipo = $tipo;
        $this -> fechaCad = $fechaCad;
        $this -> codigo = $codigo;
        $this -> pUnitario = $pUnitario;
        $this -> cantidad = $cantidad;
    }

    public function getid(){
        return $this -> id;
    }
    
    public function gettipo(){
        return $this -> tipo;
    }
    
    public function getfechaCad(){
        return $this -> fechaCad;
    }

    public function getcodigo(){
        return $this -> codigo;
    }
    
    public function getpUnitario(){
        return $this -> pUnitario;
    }
    
    public function getcantidad(){
        return $this -> cantidad;
    }
}