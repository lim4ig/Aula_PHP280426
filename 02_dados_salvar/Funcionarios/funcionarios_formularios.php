<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilofuncionarios.css">
    <title>Cadastro de Funcionários</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cadastro de Funcionários</h1>
    <form action="funcionarios_salvar.php" method="POST">

    <label class="campo-texto">Nome:</label>
    <input type="text" id="nome" name="nome" required class="campo"><br>

    <label class="campo-texto">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required class="campo"><br>

    <label class="campo-texto">Numero de Dependentes:</label>
    <input type="number" id="dependentes" name="dependentes" required class="campo"><br>

    <label class="campo-texto">Estado:</label>
        <select name="estado" id="estado" class="campo-estado" required>
            <option value="">Selecione um estado</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="SP">São Paulo</option>
        </select><br>

    <label class="campo-texto">Casado?</label>
        <input type="radio" id="casado-sim" name="casado" value="sim" required>
        <label for="casado-sim">Sim</label>
        <input type="radio" id="casado-nao" name="casado" value="nao" required>
        <label for="casado-nao">Não</label><br><br>

    <label class="campo-texto">Necessita de ajuda?</label>
        <input type="radio" id="ajuda-sim" name="ajuda" value="sim" required>
        <label for="ajuda-sim">Sim</label>
        <input type="radio" id="ajuda-nao" name="ajuda" value="nao" required>
        <label for="ajuda-nao">Não</label><br><br>

    <label class="campo-texto">Descrição:</label>
    <textarea id="descricao" name="descricao" class="campo" rows="4"></textarea><br>

    <div class="campo-botao">
        <input type="submit" value="Salvar" class="botao">
        <input type="reset" value="Limpar" class="botao">
    </div>

    </form>

    <hr>
        <h2>Lista de Funcionários</h2>
        <?php
        $arquivo = "funcionarios.txt";
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