<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 - Número Perfeito </title>
</head>


<body>

    <h1>Exercício 7 - Número Perfeito </h1>
    <form method="post">
        <label for="numero">Digite o primeiro número:</label>
        <input type="number" id="numero_1" name="numero_1" required>
        <br>
        <button type="submit" name="verificar">Verificar</button>
    </form>



    <?php

    echo "<br>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $numero_1 = filter_var($_POST['numero_1'], FILTER_VALIDATE_INT);
            if ($numero_1 === false || $numero_1 <= 0) {
                echo "Por favor, digite um número inteiro positivo!";
            } else {
                $soma_divisores = 0;
                echo "Os divisores de $numero_1 são: <br>";
                for ($i = 1; $i < $numero_1; $i++) {
                    if ($numero_1 % $i == 0) {
                        echo "$i <br>";
                        $soma_divisores += $i;
                    }
                }
            }

    echo "<br>";

            if ($soma_divisores == $numero_1) {
                echo "$numero_1 <strong>é um número perfeito!</strong> ";
                echo "<br>Soma dos divisores próprios (exceto $numero_1) é igual a: $soma_divisores é igual a ele mesmo.";
            } else {
                echo "$numero_1 <strong>não é um número perfeito!</strong>";
                echo "<br>Soma dos divisores próprios (exceto $numero_1) é igual a: $soma_divisores é diferente dele mesmo.";
            }
        }
    }
    ?>

</body>



</html>