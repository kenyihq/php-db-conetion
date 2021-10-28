<?php

    # Crear variable de conexion
    class Conexion {
        private $servidor = "localhost";
        private $base_datos = "db_prueba";
        private $usuario = "root";
        private $contrasena = "";
        private $con;

        # Crear conexión
        public function __construct() {
            $establecerConexion = "mysql:hos".$this->servidor."dbname=".$this->base_datos."charset=utf8";

            try {
                $this->con = new PDO($establecerConexion, $this->usuario, $this->contrasena);
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexión de base datos exitosa";
            } catch (Exception $e) {
                $this->con = "Error";
                echo "Error: " . $e->getMessage();
            }
        }
    }
    $con = new Conexion();
    #echo "Salid de la conexio";

?>
