<?php
$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$categoria = $_POST['categoria'];
$vegetariano = $_POST['vegetariano'];
$vegano = $_POST['vegano'];

$arquivo = fopen('pratos.txt', 'a');
fwrite($arquivo, "Nome: $nome,\t");
fwrite($arquivo, "Código: $codigo,\t");
fwrite($arquivo, "Categoria: $categoria,\t");
fwrite($arquivo, "Vegetariano: $vegetariano,\t");
fwrite($arquivo, "Vegano: $vegano\n");
fclose($arquivo);
header('Location: pratos_formulario.php');
?>