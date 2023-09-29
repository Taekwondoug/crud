<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabelo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="./imagens/icons8-gato-16" type="image/x-icon">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <h2 class="center"> Os seus produtos! </h2>
                <hr>
                <?php
                require_once 'conecta.php';
                $sql = "SELECT * FROM cabelo";
                $conexao = conectar();
                $resultado = mysqli_query($conexao, $sql);
                while ($dados = mysqli_fetch_array($resultado)) {
                    $shampoo = $_POST['shampoo'];
                    $condicionador = $_POST['condicionador'];
                    $mascara = $_POST['mascara'];
                    $creme = $_POST['creme'];
                    $reparador = $_POST['reparador'];
                ?>
                    <div class="col s12 l4 m8">
                        <div class="card hoverable">

                        
                            
                        </div>
                    </div>




    </main>
</body>

</html>