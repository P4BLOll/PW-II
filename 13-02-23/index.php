<html>
    <head>
        <title>PHP - Aula Exemplo do Uso de Variáveis</title>
    </head>
    <body>
        <?php
            $var1 = 1;
            $varX = 9.50;
            $varY = 9.50;
            $var2 = $varX + $varY;
            $varSTR = "Atribui String";
            $varletra = "a";
            $varbool = true;

            echo "Exemplo de uma aplicação em PHP";
            print "<p>";

            echo "Conteúdo de var1: ";
            echo "<strong>$var1</strong>";
            print "<p>";

            echo "Conteúdo de varX: ";
            echo "<strong>$varX</strong>";
            print "<p>";

            echo "Conteúdo de varY: ";
            echo "<strong>$varY</strong>";
            print "<p>";

            echo "Conteúdo de var2: ";
            echo "<strong>$var2</strong>";
            print "<p>";

            echo "Conteúdo de varSTR: ";
            echo "<strong>$varSTR</strong>";
            print "<p>";

            echo "Conteúdo de varletra: ";
            echo "<strong>$varletra</strong>";
            print "<p>";

            echo "Conteúdo de varbool: ";
            echo "<strong>$varbool</strong>";
        ?>
    </body>
</html>         