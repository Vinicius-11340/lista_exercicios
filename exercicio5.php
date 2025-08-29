<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5 - Número Amigo </title>
</head>


<body>

    <h1>Exercício 5 - Número Amigo </h1>
    <form method="post">
        <label for="numero">Digite o primeiro número:</label>
        <input type="number" id="numero_1" name="numero_1" required>
        <label for="numero_2">Digite o segundo número:</label>
        <input type="number" id="numero_2" name="numero_2" required>
        <br>
        <button type="submit" name="verificar">Verificar</button>
    </form>

     <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verificar'])) {
            $numero_1 = filter_var($_POST['numero_1'], FILTER_VALIDATE_INT);
            $numero_2 = filter_var($_POST['numero_2'], FILTER_VALIDATE_INT);
            if ($numero_1 === false || $numero_2 === false) {
                echo "Número inválido!";
            } else {
                
                    return $soma;
                }
                $soma1 = somaDivisores($numero_1);
                $soma2 = somaDivisores($numero_2);
                if ($soma1 == $numero_2 && $soma2 == $numero_1) {
                    echo "$numero_1 e $numero_2 são números amigos!";
                } else {
                    echo "$numero_1 e $numero_2 não são números amigos.";
                }
            }
        }
    }
    ?>  

</body>
</html>