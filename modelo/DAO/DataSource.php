<?php
//Con esta clase se logra la conexión con la base de datos
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'refugios1';
$conexion = @mysqli_connect($host, $user, $password, $db);

class DataSource
{
    private $cadenaConexion;
    private $conexion;

    public function __construct()
    {

        try {
            //Aquí se pasa el nombre del Host(localhost) y el nombre de la base de datos(adopet)
            $this->cadenaConexion = "mysql:host=localhost;dbname=refugios1;charset=utf8";

            //Aquí se crea la conexion con PDO y se pasan 3 parametros, la cadenaConexion que
            //se habia definido anteriormente, el nombre del usuario que tiene definido MySql(root)
            //y el último parámetro es la contraseña del mysql
            $this->conexion = new PDO($this->cadenaConexion, "root", "");

        } catch (PDOException $ex) {

            echo $ex->getMessage();

        }

    }


    //Con este método se puede extraer informacion de la base de datos
    public function ejecutarConsulta($sql = "", $values = array())
    {

        if ($sql != "") {

            //Se envia la consulta por el argumento de prepare($sql)
            //donde sql podria ser algo como esto:
            //SELECT * FROM usuario WHERE correo = :correo AND password = :password
            $consulta = $this->conexion->prepare($sql);

            //Se ejecuta la consulta
            $consulta->execute($values);

            //Se guardan en $tabla_datos las filas devueltas por la consulta
            $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            //Se elimina la conexion
            $this->conexion = null;

            //Retornan los datos
            return $tabla_datos;

        } else {
            //Se retorna 0 si no se envia ninguna consulta
            return 0;

        }

    }

    //Con este metodo se puede actualizar y eliminar datos de la base de datos
    public function ejecutarActualizacion($sql = "", $values = array())
    {
        if ($sql != "") {
            $consulta = $this->conexion->prepare($sql);

            // Enlaza los valores a los marcadores de posición
            foreach ($values as $clave => $valor) {
                $consulta->bindValue($clave + 1, $valor, is_int($valor) ? PDO::PARAM_INT : PDO::PARAM_STR);
            }

            // Se ejecuta la consulta
            $consulta->execute();

            // Se devuelve el número de filas afectadas
            $numero_filas_afectadas = $consulta->rowCount();

            // Cierra la conexión
            $this->conexion = null;

            // Retorna el número de filas afectadas
            return $numero_filas_afectadas;
        } else {
            return 0;
        }
    }
}
