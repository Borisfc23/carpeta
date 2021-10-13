<?php 
class DB{
    private $host;
    private $user;
    private $pass;
    private $db;
    private $charset;

    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = '';
        $this->db = 'paginacion';
        $this->charset = 'utf8mb4';
    }

    public function connect(){
        try {
            $conexion = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
            $options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES=>false];
            $pdo = new PDO($conexion,$this->user,$this->pass,$options);
            return $pdo;
        } catch (PDOException $e) {
            print_r("Error Conexion:".$e->getMessage());
        }
    }
}
?>