<?php
//Esta clase POJO sirve para guardar los datos de un Usuario
//Por ejemplo, un objeto creado a partir de esta clase
//tendrá guardado los datos de un usuario de la tabla Usuarios de la
//base de datos

class usuario
{
    public $idUsuario;
    public $nombre;
    public $apellido;
    public $fecha_nac;
    public $correo;
    public $password;
    public $fecha_creacion;
    public $cedula;
    public $telefono;
    public $direccion;
    public $foto;
    public $genero;
    public $tipo_usuario;

    public function __construct($idUsuario, $nombre, $apellido, $fecha_nac, $correo, $password, $fecha_creacion, $cedula, $telefono, $direccion, $foto, $genero, $tipo_usuario){
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->fecha_nac = $fecha_nac;
		$this->correo= $correo;
        $this->password = $password;
        $this->fecha_creacion = $fecha_creacion;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->foto = $foto;
        $this->genero = $genero;
        $this->tipo_usuario = $tipo_usuario;
    }
    
   // Métodos GET
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }
    
    public function getFecha_nac()
    {
        return $this->fecha_nac;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    public function getCedula()
    {
        return $this->telefono;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function getDireccion(){
        return $this->direccion;
    }

    public function getFoto(){
        return $this->foto;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function getTipo_usuario(){
        return $this->tipo_usuario;
    }


    //Métodos SET

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        return $this;
    }

    public function setFecha_nac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;
        return $this;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
        return $this;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
        return $this;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
        return $this;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
        return $this;
    }

    public function setTipo_usuario($tipo_usuario)
    {
        $this->tipo_usuario = $tipo_usuario;
        return $this;
    }
}