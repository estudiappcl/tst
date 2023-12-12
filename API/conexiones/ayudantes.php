<?php

require_once __DIR__.("/../conexion.php");


class AyudanteConexion extends Conexion{


    public function insertar($rut,$nombres_ayudante,$apellidos_ayudante,$carrera_ayudante,$direccion_ayudante,
    $telefono_ayudante,$correo_ayudante,$password_ayudante)
    {
        $this->conectar();
        
        $sql = "INSERT INTO ayudantes (rut,nombres_ayudante,apellidos_ayudante,carrera_ayudante,direccion_ayudante,telefono_ayudante,correo_ayudante,password_ayudante)

        VALUES(:rut,:nombres_ayudante,:apellidos_ayudante,:carrera_ayudante,:direccion_ayudante,:telefono_ayudante,
        :correo_ayudante,:password_ayudante)";

        $sentencia_pdo = $this->pdo->prepare($sql);

        $sentencia_pdo->bindParam(':rut',                         $rut,                   PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':nombres_ayudante',            $nombres_ayudante,               PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':apellidos_ayudante',          $apellidos_ayudante,             PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':carrera_ayudante',            $carrera_ayudante,               PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':direccion_ayudante',          $direccion_ayudante,             PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':telefono_ayudante',           $telefono_ayudante,              PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':correo_ayudante',             $correo_ayudante,                PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':password_ayudante',           $password_ayudante,              PDO::PARAM_STR);
        
        try{
            $funciona = $sentencia_pdo->execute();

        }catch(PDOExepcion $e){
            $this->pdo = null;
            return $e->getMessage();

        }
        $this->pdo = null;
        return $funciona;
    }
    
    public function editar($rut,$nombres_ayudante,$apellidos_ayudante,$carrera_ayudante,$direccion_ayudante,
    $telefono_ayudante,$correo_ayudante,$password_ayudante)
    {

        $this->conectar();
        
        $sql = "UPDATE ayudantes SET nombres_ayudante=:nombres_ayudante,
        apellidos_ayudante=:apellidos_ayudante,carrera_ayudante=:carrera_ayudante,direccion_ayudante=:direccion_ayudante,
        telefono_ayudante=:telefono_ayudante,correo_ayudante=:correo_ayudante,
        password_ayudante=:password_ayudante WHERE rut=:rut";

        $sentencia_pdo = $this->pdo->prepare($sql);

        $sentencia_pdo->bindParam(':rut',                $rut,                   PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':nombres_ayudante',            $nombres_ayudante,               PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':apellidos_ayudante',          $apellidos_ayudante,             PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':carrera_ayudante',            $carrera_ayudante,               PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':direccion_ayudante',          $direccion_ayudante,             PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':telefono_ayudante',           $telefono_ayudante,              PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':correo_ayudante',             $correo_ayudante,                PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':password_ayudante',           $password_ayudante,              PDO::PARAM_STR);
  
        try{
            $funciona = $sentencia_pdo->execute();

        }catch(PDOExepcion $e){
            $this->pdo = null;
            return $e->getMessage();

        }
        $this->pdo = null;
        return $funciona;
    }


    public function eliminar($rut)
    {
        $this->conectar();
        
        $sql = "DELETE FROM ayudantes WHERE rut=:rut";

        $sentencia_pdo = $this->pdo->prepare($sql);

        $sentencia_pdo->bindParam(':rut',$rut,PDO::PARAM_STR);
        
        
        try{
            $funciona = $sentencia_pdo->execute();

        }catch(PDOExepcion $e){
            $this->pdo = null;
            return $e->getMessage();

        }
        $this->pdo = null;
        return $funciona;
    }


    public function seleccionar()
    {
        $this->conectar();
        
        $sql = "SELECT * FROM ayudantes";

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

        $lista_ayudantes  = array();
        $lista_ayudantes = $sentencia_pdo->fetchAll(PDO::FETCH_OBJ); 


        $this->pdo = null;
        return $lista_ayudantes; 

    }

    public function encontrar($rut){

        $lista = $this->seleccionar();

        foreach($lista as $ayudantes)
        {
            if($ayudantes->rut == $rut ){
                return $ayudantes;
            }

        }

        return null;
    }

/*
    
*/
}
    
