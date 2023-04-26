<!-- En resumen, esta clase de PHP "Database" proporciona una forma de conectarse
 a una base de datos MySQL utilizando PDO, con la posibilidad de configurar los
  detalles de conexión a través de constantes y manejar errores de conexión mediante excepciones de PDO. -->
<?php


class Database
{
    public $host;
    public $db;
    public $user;
    public $password;
    public $charset;

    public function __construct()
    {
        $this->host     = constant('HOST');
        $this->db       = constant('DB');
        $this->user     = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset  = constant('CHARSET');
    }
    // El método "conect()" es el encargado de establecer la conexión a la base de datos. 
    // Utiliza la función "try-catch" para capturar excepciones de PDO en caso de que ocurra algún error durante la conexión.
    public function conect()
    {
        // Dentro del bloque "try", se construye la cadena de conexión utilizando los valores
        //  de las propiedades de la clase. Luego, se define un array de opciones para la conexión PDO,
        //  estableciendo el modo de errores y la emulación de preparaciones a false.
        try {
            $con = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($con, $this->user, $this->password, $opt);

            return $pdo;
        } catch (PDOException $e) {
            print_r('Error en la conexión:' . $e->getMessage("la conexion ha fallado"));
        }
    }
}
