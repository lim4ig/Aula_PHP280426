<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilopratos.css">
    <title>Cadastro de Pratos</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cadastro de Pratos</h1>
        
        <form action="pratos_salvar.php" method="POST">
            <label class="campo-texto">Nome:</label>
            <input type="text" id="nome" name="nome" required class="campo"><br>

        <label class="campo-texto">Codigo do Prato:</label>
        <input type="text" id="codigo" name="codigo" required class="campo"><br>

        <label class="campo-texto">Categoria:</label>
        <select name="categoria" id="categoria" required class="campo-categoria">
            <option value="">Selecione uma categoria</option>
            <option value="Prato Principal">Prato Principal</option>
            <option value="Sobremesa">Sobremesa</option>
            <option value="Bebida">Bebida</option>
        </select><br>

        <label class="campo-texto">Vegetariano?</label>
            <input type="radio" id="vegetariano-sim" name="vegetariano" value="sim" required>
            <label for="vegetariano-sim">Sim</label>
            <input type="radio" id="vegetariano-nao" name="vegetariano" value="nao" required>
            <label for="vegetariano-nao">Não</label><br><br>

        <label class="campo-texto">Vegano?</label>
            <input type="radio" id="vegano-sim" name="vegano" value="sim" required>
            <label for="vegano-sim">Sim</label>
            <input type="radio" id="vegano-nao" name="vegano" value="nao" required>
            <label for="vegano-nao">Não</label><br><br>

        <div class="campo-botao">
            <input type="submit" value="Salvar" class="botao">
            <input type="reset" value="Limpar" class="botao">
        </div>
    </form>

    <hr>
        <h2>Lista de Pratos</h2>
        <?php
        $arquivo = "pratos.txt";
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