
<?php

require_once 'conexionModel.php';

class CalculadoraModel
{
    private $num_uno;
    private $num_dos;
    private $operacion;

    public function store($datos)
    {
        
        try {
            
            $resultado = self::resultadoOperacion($datos);
            $sql = 'INSERT INTO operaciones(num_uno, num_dos, operacion, resultado) VALUES(:num_uno, :num_dos, :operacion, :resultado)';

            $db = new DataBase();
            $prepare = $db->conect()->prepare($sql);
            $query = $prepare->execute([
                'num_uno'   => $datos['num_uno'],
                'num_dos'   => $datos['num_dos'],
                'operacion' => $datos['operacion'],
                'resultado' => $resultado,
            ]);

            if ($query) {
                return true;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function resultadoOperacion($datos)
    {
        switch ($datos['operacion']) {
            case '1': //Suma
                return $datos['num_uno'] + $datos['num_dos'];
                break;
            case '2': //Resta
                # code...
                return $datos['num_uno'] - $datos['num_dos'];
                break;
            case '3': //Multiplicación
                return $datos['num_uno'] * $datos['num_dos'];
                # code...
                break;
            case '4': //División
                return $datos['num_uno'] / $datos['num_dos'];
                # code...
                break;

            default:
                return false;
                break;
        }
    }
}