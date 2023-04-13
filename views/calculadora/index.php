<?php

// require_once("../../models/conexionModel.php");
// require_once("../../models/calculadoraModel.php");

// $query  = "SELECT * FROM calculadora";
// $result =  mysqli_query($con, $query) or die(mysqli_error($con));


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.css">
    <title>Document</title>
</head>

<body class="m-3">
    <div class="container bg-info">
        <div class="row">
            <div class="col">
                <h1>Calculadora</h1>
                <form method="POST" action="../../controllers/calculadoraController.php">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Primer Número</label>
                        <input type="number" class="form-control" id="num1" name="num1">
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Segundo Número</label>
                        <input type="number" class="form-control" id="num2" name="num2">
                    </div>
                    <div class="mb-3">
                        <label for="opcion" class="form-label">Seleccione la Operación:</label>
                        <select class="form-control" name="opcion" id="opcion">
                            <option value="1">Sumar</option>
                            <option value="2">Restar</option>
                            <option value="3">Multiplicar</option>
                            <option value="4">Dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-outline-dark btn-sm" value="enviar">

                    </div>
                </form>
            </div>
            <hr>
            <div class="col">
                <h1>Resultados:</h1>
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Primer Numero</th>
                            <th scope="col">Segundo Numero</th>
                            <th scope="col">operador</th>
                            <th scope="col">resultado</th>
                            <th colspan="2">opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- php -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>