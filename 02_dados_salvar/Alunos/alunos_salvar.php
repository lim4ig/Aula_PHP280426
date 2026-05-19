<?php
$ra = $_POST['ra'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

$arquivo = fopen('alunos.txt', 'a');
fwrite($arquivo, "RA: $ra,\t");
fwrite($arquivo, "Nome: $nome,\t");
fwrite($arquivo, "Idade: $idade\n");
fclose($arquivo);
header('Location: alunos_formulario.php');
?>