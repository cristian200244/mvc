<?php

require_once '../models/calculadoraModel.php';

$calculadora = new CalculadoraController;

class CalculadoraController
{
    
    
    public function __construct()
    {
        switch ($_POST['c']) {
            case '1': //Almacenar en la base de datos
                self::store();
                break;

            default:
                # code...
                break;
        }
    }
    
    public function store()
    {
        $datos = [
            'num_uno' => $_REQUEST['num_uno'],
            'num_dos' => $_REQUEST['num_dos'],
            'operacion' => $_REQUEST['operacion']
        ];

        $calculadora = new CalculadoraModel();
        $result = $calculadora->store($datos);

        if ($result) {
            header("Location: ../views/calculadora/index.php");
            exit();
        }

        return $result;
    }
}
