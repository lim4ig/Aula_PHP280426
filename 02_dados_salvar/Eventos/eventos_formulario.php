<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloeventos.css">
    <title>Eventos do Mês</title>
</head>
<body>
    <div class="container">
        <h1 class="titulo">Eventos do Mês</h1>
        <form action="eventos_salvar.php" method="post">

            <label class="campo-texto">Evento</label>
            <select name="evento" id="" class="campo-evento" required>
                <option value="">Selecione um evento</option>
                <option value="Dia da Arvore">Dia da Arvore</option>
                <option value="Dia do Combate à Poluição por Agrotóxicos">Dia do Combate à Poluição por Agrotóxicos</option>
                <option value="Dia Mundial da Educação Ambiental">Dia Mundial da Educação Ambiental</option>
                <option value="Dia dos Corais da Amazônia">Dia dos Corais da Amazônia</option>
                <option value="Dia mundial das Leguminosas">Dia mundial das Leguminosas</option>
                <option value="Dia Internacional da Baleia">Dia Internacional da Baleia</option>
                <option value="Aniversário do IBAMA">Aniversário do IBAMA</option>
            </select>

            <label class="campo-texto">Data</label>
            <input type="date" name="data" required class="campo"><br>

            <label class="campo-texto">Docente</label>
            <input type="text" name="docente" required class="campo"><br>

            <div class="campo-botao">
                <input type="submit" value="Salvar" class="botao">
                <input type="reset" value="Limpar" class="botao">
            </div>
        
            
            
        </form>

        <hr>
        <h2>Lista de Eventos</h2>
        <?php
        $arquivo = "eventos.txt";
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