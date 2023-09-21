<?php  
	

    class Conexion {
    
        protected $pdo;
    
        public function __construct() {
    
            try {
    
                $host = 'localhost';
                $dbname = 'fp';		   
                $user = 'root';
                $password = '';
                $charset = 'utf8mb4';
                $collate = 'utf8mb4_unicode_ci';
    
                $dsn = "mysql:host=$host;dbname=$dbname; charset=$charset";
                
                // array de opciones para PDOException
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => false,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
                ];
                
                $this->pdo = new PDO($dsn, $user, $password, $options);
                
                
            } 
    
            catch (PDOException $e){
                    include_once('template/partials/error_conexion.php');
                    exit(0);
            }
    
        }
    
    }
    
    
?>