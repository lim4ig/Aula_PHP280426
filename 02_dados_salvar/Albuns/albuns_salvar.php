<?php
$artista = $_POST['artista'];
$nome_album = $_POST['nome_album'];
$ano_lancamento = $_POST['ano_lancamento'];

$arquivo = fopen('albuns.txt', 'a');
fwrite($arquivo, "Artista: $artista,\t");
fwrite($arquivo, "Nome do Álbum: $nome_album,\t");
fwrite($arquivo, "Ano de Lançamento: $ano_lancamento\n");
fclose($arquivo);
header('Location: albuns_formulario.php');
?>