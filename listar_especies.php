<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require('especie.php');
        function listar()
        {
            $con = new mysqli("localhost", "root", "", "devweb2_1etapa_prova_final");
            $stmt = $con->prepare('SELECT*FROM especies ORDER BY id');
            $stmt->execute();
            $registros = $stmt->get_result();
        while ($row = $registros->fetch_array()) {
        echo
        "<p>",
        "ID da espécie: ", $row["id"], " - ", "Nome da espécie: ", $row["nome"], " - ", "Família da espécie:", $row["familia"], " - ", "Quantidade: ", $row["quantidade"], " - ", "Peso: ", $row["peso"],
        "</p>";
        }
        
        $stmt->close();
        $con->close();
        }
    

        listar();
    ?>
</body>
</html>