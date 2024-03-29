<?php

require_once '../models/calculadoraModel.php';

$controller = new CalculadoraController;

class CalculadoraController
{

    private $calculadora;
 

    public function __construct()
    {
        $this->calculadora = new CalculadoraModel();
       

        if (isset($_REQUEST['c'])) {
            switch ($_REQUEST['c']) {
                case '1': //Almacenar en la base de datos
                    self::store();
                    break;
                case '2': //ver usuario
                    self::show();
                    break;
                case '3': //Actualizar el registro
                    self::update();
                    break;
                case '4': //eliminar el registro
                    self::delete();
                    break;
                default:
                    self::index();
                    break;
            }
        }
    }

    public function index()
    {
        return  $this->calculadora->getAll();
    }
    //Método "store()": Este método obtiene los datos de la solicitud ($_REQUEST) para 
    // 'num_uno', 'num_dos' y 'operacion' y los guarda en un arreglo llamado "$datos".
    //  Luego, crea una nueva instancia de la clase "CalculadoraModel" y llama al método
    //   "store()" de esa clase, pasándole los datos. Si el resultado de la operación es 
    //   exitoso, redirige a una página de índice utilizando la función "header()" y la
    //    constante 'URL', y luego finaliza la ejecución con "exit()". 

    public function store()
    {
        if (isset($_REQUEST)) {
            if (isset($_REQUEST['operacion']) && ($_REQUEST['operacion'] != 0) && isset($_REQUEST['num_uno']) && isset($_REQUEST['num_dos'])) {     
                $datos = [
                    'num_uno' => $_REQUEST['num_uno'],
                    'num_dos' => $_REQUEST['num_dos'],
                    'operacion' => $_REQUEST['operacion']
                ];
                $result = $this->calculadora->store($datos);
                if ($result) {
                    header("Location: ../views/calculadora/index.php");
                    exit();
                }
            } else {
                echo $error = "Ocurrió un error";
            }
        }
    }

    public function delete()
    {
        $this->calculadora->delete($_REQUEST['id']);
        header("Location: ../views/calculadora/index.php");
    }

    public function show()
    {
        $id = $_REQUEST['id'];
        header("Location: ../views/calculadora/show.php?id=" . $id);
    }

    public function update()
    {
        $datos = [

            'id'        => $_REQUEST['id'],
            'num_uno'   => $_REQUEST['num_uno'],
            'num_dos'   => $_REQUEST['num_dos'],
            'operacion' => $_REQUEST['operacion']
        ];

        $result = $this->calculadora->update($datos);

        if ($result) {
            header("Location: ../views/calculadora/index.php");
            exit();
        }

        return $result;
    }
}
