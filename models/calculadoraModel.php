
<?php
require_once '../controllers/calculadoraController.php';
class CalculadoraModel   
{
    
    public $num1;
    public $num2;
    public $opcion;

    public function __construct($num1, $num2, $opcion)
    {
         
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->opcion = $opcion;

    }

    public function realizarOperacion()
    {
        switch ($this->opcion) {
            case '1':
                return $this->num1 + $this->num2;
                break;
            case '2':
                return $this->num1 - $this->num2;
                break;
            case '3':
                return $this->num1 * $this->num2;
                break;
            case '4':
                if ($this->num1 === 0) {
                    return "no se puede dividir en cero inbecil, por favor cambie el pinche valor";
                }
                return $this->num1 / $this->num2;

                break;
        }
    }

}


// $num1 = $_REQUEST['num1'];
// $num2 = $_REQUEST['num2'];
// $opcion = $_REQUEST['opcion'];

// $hacer_operacion = new Calculadora($num1, $num2, $opcion);

// $hacer_operacion->num1 = ['num1'];
// $hacer_operacion->num2 = ['num2'];
// $hacer_operacion->opcion = ['opcion'];


// $hacer_operacion = new Calculadora($num1, $num2, $opcion);
// $resultado = $hacer_operacion->realizarOperacion();


// echo "el numero uno es: " . $num1 . "<br>";
// echo "el numero dos es: " . $num2 . "<br>";
// echo "el resultado de la " . $opcion . " es: " . $resultado;
