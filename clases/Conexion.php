<?php

    require_once "../vendor/autoload.php"; 

    class Conexion {
        public function conectar() {
            try {
                $servidor = "127.0.0.1";
                $usuario = "mongoadmin";
                $password = "123456";
                $baseDeDatos = "crud";
                $puerto = "27017"; 
    
                $cadenaConexion = "mongodb://" .
                                    $usuario . ":" .
                                    $password . "@" .
                                    $servidor . ":" .
                                    $puerto . "/" .
                                    $baseDeDatos; 
                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selecDatabase($baseDeDatos);
            } catch (\Throwable $th) {
                return $th->getMessage();
            } 
        }
    }

    $objeto = new Conexion();
    var_dump($objeto->conectar());
?>
