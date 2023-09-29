<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cabelo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../imagens/aa.png" type="image/x-icon">

</head>

<body>
    <?php

    // Conexão com o banco de dados
    include("conecta.php");
    $conexao = conectar();

    // Seleciona todos os dados da tabela contatos 
    $sql = "SELECT * cabelo";

    // Executa o Select
    $resultado = mysqli_query($conexao, $sql);
    ?>
</body>

</html>