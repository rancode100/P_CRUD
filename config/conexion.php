<?php
    class Conectar{
    
    
    
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost;port=3307;dbname=crud","root","");
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

    
    
    
    /*    protected $dbh;
        
       protected function Conexion(){
        try{
            $this->dbh = new PDO(
                "mysql:host=localhost;port=3307;dbname=crud",
                "root",
                ""
            );

            return $this->dbh;

        }catch(Exception $e){
            print "¡Error BD!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_names(){
        if ($this->dbh) {
            $this->dbh->query("SET NAMES 'utf8'");
        } else {
            die("Error: No hay conexión a la BD (dbh vacío)");
        }
    }*/

    }

?>