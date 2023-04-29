<?php

require_once '../../models/calculadoraModel.php';
$data = new CalculadoraModel();
$registros = $data->getAll();

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
                <h1 class="text-center">Calculadora</h1>
                <form method="POST" action="../../controllers/calculadoraController.php">
                    <input type="hidden" name="c" value="1">
                    <div class="mb-3">
                        <label for="num_uno" class="form-label">Primer Número</label>
                        <input type="number" class="form-control" id="num_uno" name="num_uno" required>
                    </div>
                    <div class="mb-3">
                        <label for="num_dos" class="form-label">Segundo Número</label>
                        <input type="number" class="form-control" id="num_dos" name="num_dos" required>  
                    </div>
                    <div class="mb-3">
                        <label for="operacion" class="form-label">Seleccione la Operación:</label>
                        <select class="form-control" name="operacion" id="operacion" required="required"">
                            <option value=""></option>
                            <option value=" 1">Sumar</option>
                            <option value="2">Restar</option>
                            <option value="3">Multiplicar</option>
                            <option value="4">Dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Guardar</button>

                    </div>
                </form>
            </div>
            <hr>
            <div class="col">
                <h1 class="text-center">Resultados:</h1>
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Primer Numero</th>
                            <th scope="col">Segundo Numero</th>
                            <th scope="col">operador</th>
                            <th scope="col">resultado</th>
                            <th colspan="2">opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($registros) {
                            foreach ($registros as $row) {

                        ?>
                                <tr>

                                    <td><?= $row->num_uno ?></td>
                                    <td><?= $row->num_dos ?></td>
                                    <td><?= $row->operacion ?></td>
                                    <td><?= $row->resultado ?></td>
                                    <!-- php $row->EstiloMillares($row->resultado) php -->
                                    <td>
                                        <a class="btn btn-sm btn-outline-warning" href="../../controllers/calculadoraController.php?c=2&id=<?= $row->getId() ?>">Actualizar</a>
                                    </td>
                                    <td>
                                        <a class=" btn btn-sm btn-outline-danger" href="../../controllers/calculadoraController.php?c=4&id=<?= $row->getId() ?>" id="eliminar">Eliminar</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../public/js/alert.js"></script>
</body>

</html>