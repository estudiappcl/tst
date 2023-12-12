<?php

require_once __DIR__.("/../conexion.php");


class MiPerfilConexion extends Conexion{
    //CRUD
    //Insertar
    //eliminar
    //seleccionar
    //editar


    public function insertar($nombre_ayudantia,$descripcion,$Carrera,$Asignatura,$Materia,$fecha_de_inicio,
    $hora_termino,$participantes,$precio,$ubicacion,$estado,$rut_ayudante)
    {
        $this->conectar();
        
        $sql = "INSERT INTO ayudantias (nombre_ayudantia,descripcion,Carrera,Asignatura,Materia,fecha_de_inicio,hora_termino,
        participantes,precio,ubicacion,estado,rut_ayudante)

        VALUES(:nombre_ayudantia,:descripcion,:Carrera,:Asignatura,:Materia,:fecha_de_inicio,
        :hora_termino,:participantes,:precio,:ubicacion,:estado,:rut_ayudante)";

        $sentencia_pdo = $this->pdo->prepare($sql);

        $sentencia_pdo->bindParam(':nombre_ayudantia',                $nombre_ayudantia,          PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':descripcion',                     $descripcion,               PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':Carrera',                         $Carrera,                   PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':Asignatura',                      $Asignatura,                PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':Materia',                         $Materia,                   PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':fecha_de_inicio',                 $fecha_de_inicio,           PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':hora_termino',                    $hora_termino,              PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':participantes',                   $participantes,             PDO::PARAM_INT);
        $sentencia_pdo->bindParam(':precio',                          $precio,                    PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':ubicacion',                       $ubicacion,                 PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':estado',                          $estado,                    PDO::PARAM_BOOL);
        $sentencia_pdo->bindParam(':rut_ayudante',                    $rut_ayudante,              PDO::PARAM_STR);



        try{
            $funciona = $sentencia_pdo->execute();

        }catch(PDOExepcion $e){
            $this->pdo = null;
            return $e->getMessage();

        }
        $this->pdo = null;
        return $funciona;
    }



    public function editar($id_ayudantia,$nombre_ayudantia,$descripcion,$Carrera,$Asignatura,$Materia,$fecha_de_inicio,
    $hora_termino,$participantes,$precio,$ubicacion,$estado,$rut_ayudante)
    {
        $this->conectar();
        
        $sql = "UPDATE ayudantias SET nombre_ayudantia=:nombre_ayudantia,descripcion=:descripcion,Carrera=:Carrera,
        Asignatura=:Asignatura,Materia=:Materia,fecha_de_inicio=:fecha_de_inicio,hora_termino=:hora_termino,
        participantes=:participantes,precio=:precio,ubicacion=:ubicacion,estado=:estado,rut_ayudante=:rut_ayudante WHERE id_ayudantia=:id_ayudantia";

      

        $sentencia_pdo = $this->pdo->prepare($sql);

        $sentencia_pdo->bindParam(':id_ayudantia',                    $id_ayudantia,              PDO::PARAM_INT);
        $sentencia_pdo->bindParam(':nombre_ayudantia',                $nombre_ayudantia,          PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':descripcion',                     $descripcion,               PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':Carrera',                         $Carrera,                   PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':Asignatura',                      $Asignatura,                PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':Materia',                         $Materia,                   PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':fecha_de_inicio',                 $fecha_de_inicio,           PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':hora_termino',                    $hora_termino,              PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':participantes',                   $participantes,             PDO::PARAM_INT);
        $sentencia_pdo->bindParam(':precio',                          $precio,                    PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':ubicacion',                       $ubicacion,                 PDO::PARAM_STR);
        $sentencia_pdo->bindParam(':estado',                          $estado,                    PDO::PARAM_BOOL);
        $sentencia_pdo->bindParam(':rut_ayudante',                    $rut_ayudante,              PDO::PARAM_STR);


        try{
            $funciona = $sentencia_pdo ->execute();

        }catch(PDOExepcion $e){
            $this->pdo = null;
            return $e->getMessage();

        }
        $this->pdo = null;
        return $funciona;
    }

    public function eliminar($id_ayudantia)
    {
        $this->conectar();
        
        $sql = "DELETE FROM ayudantias WHERE id_ayudantia=:id_ayudantia ";

        $sentencia_pdo = $this->pdo->prepare($sql);

        $sentencia_pdo->bindParam(':id_ayudantia',   $id_ayudantia,   PDO::PARAM_INT);
      

        try{
            $funciona = $sentencia_pdo ->execute();

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
        
        $sql = "SELECT * FROM ayudantias";

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

        $lista_ayudantias  = array();
        $lista_ayudantias = $sentencia_pdo->fetchAll(PDO::FETCH_OBJ); 


        $this->pdo = null;
        return $lista_ayudantias; 

      
    }

    public function encontrar($id_ayudantia){

        $lista = $this->seleccionar();

        foreach($lista as $ayudantias)
        {
            if($ayudantias->id_ayudantia == $id_ayudantia ){
                return $ayudantias;
            }

        }

        return null;
    }




    public function buscar(){

        $this->conectar();


        $sql  = "";

    }
}