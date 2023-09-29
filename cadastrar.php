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
<main>
        <div class="container">
            <h1 class="center purple-text"> Produtos p/ Seu Cabelo </h1>
            <hr>
            <div class="row reduc">

                <form action="procAnimal.php" method="POST" enctype="multipart/form-data">

                    <div class="input-field col s12">
                        <label> Shampoo </label><br>
                        <input type="text" name="shampoo" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <label> Condicionador </label><br>
                        <input type="text" name="condicionador" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <label> Máscara de cabelo </label><br>
                        <input type="text" name="mascara" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <label> Creme </label><br>
                        <input type="text" name="creme" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <label> Reparador de pontas </label><br>
                        <input type="text" name="reparador" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <button class="waves-effect waves-light btn purple" type="submit" name="enviar">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>
</html>