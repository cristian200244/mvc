<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Actualizar Registro</title>
</head>

<body class="m-5">

    <div class="container bg-info">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Calculadora</h1>
                <h3>Actualizacion de datos de la calculadora</h3>
                <hr>
                <form method="POST" action="../../controllers/calculadoraController.php">
                    <input type="hidden" name="c" value="2">
                    <input type="hidden" name="id" value="<?= $row->id ?>">
                    <div class="mb-3">
                        <label for="num_uno" class="form-label">Primer Número</label>
                        <input type="number" class="form-control" id="num_uno" name="num_uno" value="<?= $this->calculadora->num_uno ?>">
                    </div>
                    <div class="mb-3">
                        <label for="num_dos" class="form-label">Segundo Número</label>
                        <input type="number" class="form-control" id="num_dos" name="num_dos" value="<?= $this->calculadora->$num_dos ?>">
                    </div>
                    <div class="mb-3">
                        <label for="operacion" class="form-label">Seleccione la Operación:</label>
                        <select class="form-control" name="operacion" id="operacion" value="<?= $this->calculadora->operacion ?>">

                            <option >Elige una operacion</option>
                            <option value="1">Sumar</option>
                            <option value="2">Restar</option>
                            <option value="3">Multiplicar</option>
                            <option value="4">Dividir</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Actualizar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>