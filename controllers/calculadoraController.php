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
//Método "store()": Este método obtiene los datos de la solicitud ($_REQUEST) para 
// 'num_uno', 'num_dos' y 'operacion' y los guarda en un arreglo llamado "$datos".
//  Luego, crea una nueva instancia de la clase "CalculadoraModel" y llama al método
//   "store()" de esa clase, pasándole los datos. Si el resultado de la operación es 
//   exitoso, redirige a una página de índice utilizando la función "header()" y la
//    constante 'URL', y luego finaliza la ejecución con "exit()". 

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
echo "hola";