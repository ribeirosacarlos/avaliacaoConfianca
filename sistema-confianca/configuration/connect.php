<?php
    define('HOST', 'localhost');
    define('DBNAME', 'confianca-clientes');
    define('USER', 'root');
    define('PASSWORD', '');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        private function connectDatabase(){
            try 
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
                echo "ERRO".$e->getMessage();
                die();
            }
        } 

    }
?>
