<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$fumante = $_POST['fumante'];

$arquivo = fopen('pacientes.txt', 'a');
fwrite($arquivo, "Nome: $nome,\t");
fwrite($arquivo, "Telefone: $telefone,\t");
fwrite($arquivo, "Cidade: $cidade,\t");
fwrite($arquivo, "Estado: $estado,\t");
fwrite($arquivo, "Fumante: $fumante\n");
fclose($arquivo);
?>