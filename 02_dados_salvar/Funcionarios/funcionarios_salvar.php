<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$dependentes = $_POST['dependentes'];
$estado = $_POST['estado'];
$casado = $_POST['casado'];
$ajuda = $_POST['ajuda'];
$descricao = $_POST['descricao'];

$arquivo = fopen('pacientes.txt', 'a');
fwrite($arquivo, "Nome: $nome,\t");
fwrite($arquivo, "Telefone: $telefone,\t");
fwrite($arquivo, "Dependentes: $dependentes,\t");
fwrite($arquivo, "Estado: $estado,\t");
fwrite($arquivo, "Casado: $casado,\t");
fwrite($arquivo, "Necessita de ajuda: $ajuda,\t");
fwrite($arquivo, "Descrição: $descricao\n");
fclose($arquivo);
?>