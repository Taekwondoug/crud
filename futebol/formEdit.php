<?php

include_once("conecta.php");
$conexao = conectar();
$id = $_GET['editar'];

$sql = "SELECT * FROM fut WHERE id=" . $id;

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
        background-color: #98FB98;
    }
</style>

<body>
    <?php
    include "cabecalho.php";
    ?>
    <div class="container">
        <h1> Editar </h1>
        <hr>
        <div class="row reduc">
            <form action="processaJ.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <div class="input-field col s12">
                    <label> Time </label><br>
                    <input type="text" name="tim" value="<?php echo $dados['tim']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <label> Jogador </label><br>
                    <input type="text" name="jogador" value="<?php echo $dados['jogador']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <label> Pontos </label><br>
                    <input type="number" name="pontos" value="<?php echo $dados['pontos']; ?>" required="required" />
                </div>

                <div class="input-field col s12">
                    <button class="waves-effect waves-light btn purple" type="submit" name="editar">Editar</button>
                </div>

            </form>
        </div>
    </div>
</body>

</html>