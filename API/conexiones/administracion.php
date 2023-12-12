<?php

require_once __DIR__.("/../conexion.php");


class MiAdministracion extends Conexion{



    public function seleccionar()
    {
        $this->conectar();
        
        $sql = "SELECT * FROM administracion";

        $sentencia_pdo = $this->pdo->prepare($sql);

        try{
            $funciona = $sentencia_pdo ->execute();

        }catch(PDOExepcion $e){
            $this->pdo = null;
            return $e->getMessage();

        }


        if(!$funciona){
            $this->pdo = null; 
            return $funciona;
        }

        $lista_administracion  = array();
        $lista_administracion = $sentencia_pdo->fetchAll(PDO::FETCH_OBJ); 


        $this->pdo = null;
        return $lista_administracion; 

      
    }

    public function encontrar($rut_admin){

        $lista = $this->seleccionar();

        foreach($lista as $administracion)
        {
            if($administracion->rut_admin == $rut_admin ){
                return $administracion;
            }

        }

        return null;
    }













}