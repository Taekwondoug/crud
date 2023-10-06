<?php

include_once("conecta.php");
$conexao = conectar();
$id = $_GET['editar'];

$sql = "SELECT * FROM cabelo WHERE id=" . $id;

$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar</title>
</head>
<style>
    body {
        background-color: #ede7f6;
    }
</style>

<body>
    <?php
    include "cabecalho.php";
    ?>
    <div class="container">
        <h1> Editar Produtos </h1>
        <hr>
        <div class="row reduc">
            <form action="processaC.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div class="input-field col s12">
                    <label> Shampoo </label><br>
                    <input type="text" name="shampoo" value="<?php echo $dados['shampoo']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <label> Condicionador </label><br>
                    <input type="text" name="condicionador" value="<?php echo $dados['condicionador']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <label> Máscara de cabelo </label><br>
                    <input type="text" name="mascara" value="<?php echo $dados['mascara']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <label> Creme </label><br>
                    <input type="text" name="creme" value="<?php echo $dados['creme']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <label> Reparador de pontas </label><br>
                    <input type="text" name="reparador" value="<?php echo $dados['reparador']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <button class="waves-effect waves-light btn purple" type="submit" name="editar">Editar</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>