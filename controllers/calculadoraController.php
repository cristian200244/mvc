<?php

require_once '../models/calculadoraModel.php';

$calculadora = new CalculadoraController;

class CalculadoraController
{

    public function __construct()
    {
        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case '1': //Almacenar en la base de datos
                    self::store();
                    break;

                default:
                    self::index();
                    break;
            }
        }
    }

    public function index()
    {
        $resultados = new CalculadoraModel();
        $data = $resultados->getAll();

        return $data;
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
            header("Location: " . constant('URL') . "../views/calculadora/index.php");
            exit();
        }

        return $result;
    }
}