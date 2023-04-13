<?php
require_once '../Config/config.php';
class Database
{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {
        $this->host     = constant('localhots');
        $this->db       = constant('calculadora_db');
        $this->user     = constant('root');
        $this->password = constant('');
        $this->charset  = constant('CHARSET');
    }

    public function conect()
    {
        try {
            $con = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($con, $this->user, $this->password, $opt);

            return $pdo;
        } catch (PDOException $e) {
            print_r('Error en la conexión:' . $e->getMessage());
        }
    }
}
