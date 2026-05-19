<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilodealunos.css">
    <title>Alunos</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cadastro de Alunos</h1>
        <form action="alunos_salvar.php" method="post">

            <label class="campo-texto">RA</label>
            <input type="text" name="ra" required class="campo"><br>

            <label class="campo-texto">Nome</label>
            <input type="text" name="nome" required class="campo"><br>

            <label class="campo-texto">Idade</label>
            <input type="number" name="idade" min="0" required class="campo"><br>

            <div class="campo-botao">
                <input type="submit" value="Salvar" class="botao">
                <input type="reset" value="Limpar" class="botao">
            </div>

        </form>

        <hr>
        <h2>Lista de Alunos</h2>
        <?php
        $arquivo = "alunos.txt";
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