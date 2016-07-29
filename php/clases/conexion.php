<?php
    include 'BaseDeDatos.php';
    /**
    * 
    */
    class BaseDatos extends ParametrosBD
    {
        private $db;	
        public function conexion()
        {
            if($this->TipoBD == "mysql")
            {
                $this->db = new mysqli($this->Host,$this->Usuario,$this->Contrasena,$this->BaseDatos);
                $acentos = $this->db->query("SET NAMES 'utf8'");
                if($this->db->connect_error>0)
                {
                    die('No se puede conectar a DB[' . $this->db->connect_error . ']');
                }
            }
            else if ($this->TipoBD == "pgsql")
            {
                $cadena = "host=".$this->Host." dbname=".$this->BaseDatos." user=".$this->Usuario." password=".$this->Contrasena;
                $this->db = pg_connect($cadena) or die ("Error en la conexion ".pg_last_error());
            }
        }
        public function ejecutarQuery($consulta)
        {
            if($this->TipoBD == "mysql")
            {
                return mysqli_query($this->db,($consulta));
            }
            else if ($this->TipoBD == "pgsql")
            {
                return pg_query($consulta);
            }
        }
        public function recorreArreglo($arregloConsulta)
        {
            if($this->TipoBD == "mysql"){
                return $arregloConsulta->fetch_assoc();
            }
            else if ($this->TipoBD == "pgsql")
            {
                return pg_fetch_array($arregloConsulta,null,PGSQL_ASSOC);
            }
        }
    }
    $BaseDatos = new BaseDatos();
    $BaseDatos->conexion();
?>