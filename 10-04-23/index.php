<?php 

    if(isset($_POST['nome'])){
        echo "<h1>" . $_POST['nome'] . "</h1>";
        $arquivo = fopen("dados.txt" , "a");
        fwrite($arquivo, "Nome: " . $_POST['nome']);
        fclose($arquivo);

        if(isset($_POST['voto1'])){
            $votoverde = 0;
            $arquivo = fopen("dados.txt" , "a");
            fwrite($arquivo, "Voto: " . $_POST['voto1']);
            fclose($arquivo);
            $votoverde = $votoverde + 1;
        }else{
            if(isset($_POST['voto2'])){
                $arquivo = fopen("dados.txt" , "a");
                fwrite($arquivo, "Voto: " . $_POST['voto2'] . "\n");
                fclose($arquivo);
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body style=" background-color: <?php 

if(isset($_POST['nome'])){
    
    echo '#CCCCCC';
}else{
    echo '#f3f3f3  ';
}

?>"
>
    <form name="dados_pessoas" method="POST" action="">
        Nome: <input type="text" name="nome" id="nome"><br>
        <br>
        <h3>Votação</h3>
        Verde<input type="radio" name="voto1" id="voto" value="Verde"><br>
        Vermelho<input type="radio" name="voto2" id="voto" value="Vermelho"><br>
        <br>
        <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
    </form>
</body>
</html>