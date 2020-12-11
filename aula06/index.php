<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF--8">
        <title>Aula 06 - Encapsulamento</title>
    </head>
    <body>
        <h1>Projeto Controle Remoto</h1>
        <pre>
        <?php
            require_once 'ControleRemoto.php';
            $c = new ControleRemoto();
            $c->ligar();
            $c->aumentarVolume();
            $c->abrirMenu();
        ?>
        </pre>
    </body>
</html>