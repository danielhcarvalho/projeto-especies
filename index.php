<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Espécies</h1>
    <form action="salvar_especie.php" method="POST">
    <label>Nome da espécie
        <input type="text" name="nome_especie">
    </label>
    <label>Família
        <input type="text" name="familia_especie">
    </label>
    <label>Quantidade
        <input type="number" name="quantidade">
    </label>
    <label>Peso
        <input type=text" name="peso">
    </label>
    <input type="submit" value="Enviar">
    </form>
    <a href="listar_especies.php">Listar Espécies</a>

</body>
</html>