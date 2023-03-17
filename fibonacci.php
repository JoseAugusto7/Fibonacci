<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Verificando sequência fibonacci</title>
</head>
<body>
    <section class="container text-center">
        <article class="mt-5">
            <h4>Coloque um número para verificar se existe na sequência fibonacci</h4>
            <form class="mt-5 col-6 m-auto">
                <label class="form-label" for="numero">Número</label>
                <input class="form-control" type="number" name="numero" id="numero">
                <input class="btn btn-primary mt-3 mb-5" type="submit" value="Verificar">
            </form>
        </article>
        <?php

            $numero = $_GET["numero"] ?? null;

            $anterior = 0;
            $atual = 1;
            $resultado = 0;

            for ($x = 1; $resultado < $numero; $x ++) {

                $resultado = $anterior + $atual;
                $anterior = $atual;
                $atual = $resultado;

            }

            if ($numero == 0 || $numero == 1) {

                echo "$numero - O número está na sequência";
                
            } elseif ($resultado == $numero) {
                
                echo "$resultado - O número está na sequência";

            } elseif ($numero == null || $numero < 0) {
                
                echo "Coloque um número de 0 em diante...";

            } else {

                echo "O número não está na sequência, o número mais próximo do informado é: $resultado";
            }
        ?>
    </section>
</body>
</html>