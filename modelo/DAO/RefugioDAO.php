<?php
require_once ("DataSource.php");  //La clase que permite conectarse a la Base de Datos
require_once (__DIR__."/../entidad/refugio.php");


class RefugioDAO {

    public function crearRefugio(Refugio $refugio){
        $data_source = new DataSource();
        
        $stmt1 = "INSERT INTO refugio VALUES (NULL, :nombre, :direccion, :correo, :telefono, :foto)"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':nombre' => $refugio->getNombre(),
            ':direccion'=>$refugio->getDireccion(),
            ':correo'=>$refugio->getCorreo(),
            ':telefono'=>$refugio->getTelefono(),
            ':foto'=>$refugio->getFoto()
            )
        ); 
    return $resultado;
    }

    public function verRefugios(){
        $data_source = new DataSource();
        
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM refugio", NULL);

        $refugio=null;
        $refugios=array();

        foreach($data_table as $indice => $valor){
            $refugio = new Refugio(
                    $data_table[$indice]["idRefugio"],
                    $data_table[$indice]["nombre"],
                    $data_table[$indice]["direccion"],
                    $data_table[$indice]["correo"],
                    $data_table[$indice]["telefono"],
                    $data_table[$indice]["foto"]
                    );
            array_push($refugios,$refugio);
        }
        
    return $refugios;
    }

    public function eliminarRefugio($idRefugio){
        $data_source = new DataSource();
        
        $stmt1 = "DELETE FROM refugio WHERE idRefugio = :idRefugio"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idRefugio' => $idUsuario
            )
        ); 

      return $resultado;
    }

    public function verRefugioPorId($idRefugio){
        $data_source = new DataSource();
        echo $idRefugio;
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM refugio WHERE idRefugio = :idRefugio", array(':idRefugio'=>$idRefugio));

        $refugio=null;
        //Si $data_table retornó una fila, quiere decir que se encontro el refugio en la base de datos
        if(count($data_table)==1){
            $refugio = new Refugio(
                    $data_table[0]["idRefugio"],
                    $data_table[0]["nombre"],
                    $data_table[0]["direccion"],
                    $data_table[0]["correo"],
                    $data_table[0]["telefono"],
                    $data_table[0]["foto"]
                    );
        }
        
        return $refugio;
    }

    public function editarRefugio($refugio){
        $data_source = new DataSource();
        
        $stmt1 = "UPDATE refugio SET nombre = :nombre, apellido = :apellido, fecha_nacimiento = :fecha_nacimiento, correo = :correo, password = :password, telefono = :telefono, direccion = :direccion, foto = :foto, administrador = :administrador WHERE idUsuario = :idUsuario"; 
        
        $resultado = $data_source->ejecutarActualizacion($stmt1, array(
            ':idUsuario' => $refugio->getIdRefugio(),
            ':nombre' => $refugio->getNombre(),
            ':direccion'=>$refugio->getDireccion(),
            ':correo'=>$refugio->getCorreo(),
            ':telefono'=>$refugio->getTelefono(),
            ':foto'=>$refugio->getFoto()
            )
        ); 

      return $resultado;
    }

}



