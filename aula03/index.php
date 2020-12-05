<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF--8">
        <title>Aula 3</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC Cristal";
            $c1->cor = "Azul";
            // $c1->ponta = 0.5;
            // $c1->carga = 99;

            $c1->rabiscar();
            $c1->tampar();
            print_r($c1);
        ?>
        </pre>
    </body>
</html>