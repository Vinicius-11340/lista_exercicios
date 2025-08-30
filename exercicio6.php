<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6 - Divisores </title>
</head>


<body>

    <h1>Exercício 6 - Divisores </h1>
    <form method="post">
        <label for="numero">Digite o primeiro número:</label>
        <input type="number" id="numero_1" name="numero_1" required>
        <br>
        <button type="submit" name="verificar">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $numero_1 = filter_var($_POST['numero_1'], FILTER_VALIDATE_INT);
            if ($numero_1 === false) {
                echo "Número inválido!";
            } else {
                 echo "Os divisores de $numero_1 são: <br>" ;                 
                for ($i = 1; $i <= $numero_1; $i++) {
                    if ($numero_1 % $i == 0) {
                        echo "$i <br>" ;
                    }
                }
            }
        }
    }
    ?>

</body>

</html>