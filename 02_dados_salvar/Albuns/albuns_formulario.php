<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilodealbuns.css">
    <title>Álbuns</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cadastro de Álbuns</h1>
        <form action="albuns_salvar.php" method="post">

            <label class="campo-texto">Artista</label>
            <input type="text" name="artista" required class="campo"><br>

            <label class="campo-texto">Nome do Álbum</label>
            <input type="text" name="nome_album" required class="campo"><br>

            <label class="campo-texto">Ano de Lançamento</label>
            <input type="number" name="ano_lancamento" min="1900" max="2099" step="1" required class="campo"><br>

            <div class="campo-botao">
                <input type="submit" value="Salvar" class="botao">
                <input type="reset" value="Limpar" class="botao">
            </div>

        </form>

        <hr>
        <h2>Lista de Álbuns</h2>
        <?php
        $arquivo = "albuns.txt";
        $arquivo_aberto = fopen($arquivo, "r");
        while (!feof($arquivo_aberto)) {
            $linha = fgets($arquivo_aberto);
            echo "$linha<br>";
        }
        fclose($arquivo_aberto);
        ?>


    </div>
</body>
</html>