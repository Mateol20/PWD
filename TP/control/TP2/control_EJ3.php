<?php
// Los datos del formulario son enviados a un script 
// verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El 
// arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje 
// de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo 
// y en caso contrario un mensaje de error. 
class control_EJ3{

    private $usuarios;
    private $usuarioIngresado;
    private $claveIngresada;
    private $autenticado;
    public function __construct()
    {
        $this->usuarios = [
        ["usuario" => "user1", "clave" => "pass1"],
        ["usuario" => "user2", "clave" => "pass2"],
        ["usuario" => "user3", "clave" => "pass3"],
        ["usuario" => "admin", "clave" => "admin123"],
        ];
        $this->usuarioIngresado = obtenerDato('username');
        $this->claveIngresada = obtenerDato('password');
        $this->autenticado = false;
    }

    public function getUsuarios(){
        return $this->usuarios;
        }
    
    public function getUsuarioIngresado(){
        return $this->usuarios;
        }
    
    public function getClaveIngresada(){
        return $this->usuarios;
        }
    
    public function getAutentico(){
        return $this->usuarios;
        }
    
        public function validarClave($datos){
            $user = $datos["username"];
            $password = $datos["password"];
        foreach ($this->getUsuarios() as $usuario) {
            if ($usuario['usuario'] === $user && $usuario['clave'] === $password) {
                $autenticado = true;
                break;
            }
        }
        if ($autenticado) {
            $mensaje = "Bienvenido, ". $user;
        } else {
            $mensaje = "Error: Usuario o clave incorrectos.";
        }
        return $mensaje;
    }
}

