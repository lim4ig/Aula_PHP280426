<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilopacientes.css">
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Cadastro de Pacientes</h1>
<form action="pacientes_salvar.php" method="POST">
    <label class="campo-texto">Nome:</label>
    <input type="text" id="nome" name="nome" required class="campo"><br>

    <label class="campo-texto">Telefone:</label>
    <input type="text" id="telefone" name="telefone" required class="campo"><br>

    <label class="campo-texto">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required class="campo"><br>

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

    <label class="campo-texto">Fumante?</label>
    <input type="radio" id="fumante-sim" name="fumante" value="sim" required>
    <label for="fumante-sim">Sim</label>
    <input type="radio" id="fumante-nao" name="fumante" value="nao" required>
    <label for="fumante-nao">Não</label><br><br>

    <div class="campo-botao">
        <input type="submit" value="Salvar" class="botao">
        <input type="reset" value="Limpar" class="botao">
    </form>

    <hr>
        <h2>Lista de Pacientes</h2>
        <?php
        $arquivo = "pacientes.txt";
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