<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="./imagens/icons8-gato-16" type="image/x-icon">
    <title> Times Brasileiros </title>
</head>
<style>
    body{
        background-color: #98FB98;
    }
</style>
<body>
    <?php
    include "cabecalho.php";
    ?>
    <?php
    include_once('conecta.php');
    $conexao = conectar();

    $sql = "SELECT * FROM fut";
    $resultado = mysqli_query($conexao, $sql);

    ?>
    <div class="container">
    <h1 class="blue-text text-darken-4"> Tabela de times e melhores jogadores </h1>
            <hr>
        <table class="striped">
            <thead>
                <tr>
                    <th>Times</th>
                    <th>Jogadores</th>
                    <th>Pontos</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td> <?php echo $dados['tim']; ?> </td>
                    <td> <?php echo $dados['jogador']; ?> </td>
                    <td> <?php echo $dados['pontos']; ?> </td>
                    <td>
                        <a href="formEdit.php?editar=<?php echo $dados['id']; ?>">
                            <img height='24' width='24' src='img/edit.png'> </a>

                        <a href="processa.php?deletar=<?php echo $dados['id']; ?>">
                            <img height='24' width='24' src='img/del.png' /> </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>