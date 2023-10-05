<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="shortcut icon" href="./imagens/icons8-gato-16" type="image/x-icon">
    <title> Your Hair </title>
</head>
<style>
    body{
        background-color: #ede7f6;
    }
</style>
<body>
    <?php 
    include "cabecalho.php";
    ?>
    <?php
    include_once('conecta.php');
    $conexao = conectar();

    $sql = "SELECT * FROM cabelo";
    $resultado = mysqli_query($conexao, $sql);

    ?>
    <div class="container">
        <table class="striped">
            <thead>
                <tr>
                    <th>Shampoo</th>
                    <th>Condicionador</th>
                    <th>Máscara de cabelo</th>
                    <th>Creme</th>
                    <th>Reparador de pontas</th>
                </tr>
            </thead>

            <tbody>
            <?php while ($dados = mysqli_fetch_assoc($resultado)) : ?>
                <tr>
                    <td> <?php echo $dados['shampoo']; ?> </td>
                    <td> <?php echo $dados['condicionador']; ?> </td>
                    <td> <?php echo $dados['mascara']; ?> </td>
                    <td> <?php echo $dados['creme']; ?> </td>
                    <td> <?php echo $dados['reparador']; ?> </td>
                    <td>
                        <a href="formEdit.php?editar=<?php echo $dados['id']; ?>">
                            <img height='24' width='24' src='img/edit.png'> </a>

                        <a href="processaC.php?deletar=<?php echo $dados['id']; ?>">
                            <img height='24' width='24' src='img/del.png' /> </a>
                    </td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>