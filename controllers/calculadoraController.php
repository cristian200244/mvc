<?php

require_once '../Models/CalculadoraModel.php';

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
            header("Location: ../index.php");
            exit();
        }

        return $result;
    }
}
print "estas en calculdora controler";