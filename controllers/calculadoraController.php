<?php 


class CalculadoraController {
    public function __construct() {
        // $this->view->mensaje = '';
      
    }
    // almacenar
    public function store()
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $opcion = $_POST['opcion'];

        $store = $this->store(['num1' => $num1,'num2' => $num2,'opcion' => $opcion]);
        // var_dump($_POST);
        
        if($store){
            $mensaje = "se ha creado un nuevo registro de operacion";
        }else{
            $mensaje = " ha ocurrido un error con la creacio de la operacion";
        }
        
    }
    // actualizar
    public function update(){
        $id = $_POST['id'];

        $data= [
            'id' => $_POST['id'],
            'num1' => $_POST['num1'],
            'num2' => $_POST['num2'],
            'opcion' => $_POST['opcion']
        ];

        if ($result) {
            $this->views->mensaje = "El numero se ha actualizado correctamente";
        } else {
            $this->views->mensaje = "El numero no se ha actualizado";
        }

    }
     
}
print "90 ";