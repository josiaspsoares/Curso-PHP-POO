<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF--8">
        <title>Aula 05</title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'ContaBanco.php';

                $c1 = new ContaBanco();
                $c2 = new ContaBanco();

                $c1->abrirConta("CP");
                $c1->setDono("Creuza");
                $c1->setNumConta(1);

                $c2->abrirConta("CC");
                $c2->setDono("Jubileu");
                $c2->setNumConta(2);

                $c1->depositar(500);
                $c2->depositar(300);

                $c1->sacar(1000);

                $c1->pagarMensal();
                $c2->pagarMensal();

                $c1->sacar(630);
                $c2->sacar(338);

                $c1->fecharConta();
                $c2->fecharConta();

                print_r($c1);
                print_r($c2);
            ?>
        </pre>
    </body>
</html>