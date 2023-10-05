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
        background-color: #ede7f6;
    }
</style>
<body>
<main>
        <div class="container">
            <h1 class="center purple-text"> Times </h1>
            <hr>
            <div class="row reduc">


                <form action="processaJ.php" method="POST">

                    <div class="input-field col s12">
                        <label> Time </label><br>
                        <input type="text" name="time" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <label> Jogador </label><br>
                        <input type="text" name="jogador" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <label> Pontos </label><br>
                        <input type="text" name="pontos" required="required" />
                    </div>

                    <div class="input-field col s12">
                        <button class="waves-effect waves-light btn purple" type="submit" name="enviar">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</body>
</html>