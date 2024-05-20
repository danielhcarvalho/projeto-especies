<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require('especie.php');

        $nome = $_POST['nome_especie'];
        $familia = $_POST['familia_especie'];
        $quantidade = $_POST['quantidade'];
        $peso = $_POST['peso'];

        $especie = new Especie($nome, $familia, $quantidade, $peso);
        $especie->salvar();
?>

<a href="index.php">Voltar</a>
</body>
</html>