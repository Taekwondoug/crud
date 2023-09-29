<?php
function conectar(){
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bancoDados = "belo";
    $conexao = mysqli_connect($host, $usuario, $senha, $bancoDados);
    
    if($conexao){
        return $conexao;
    } else {
        echo "Erro ao acessar o banco de dados" . mysqli_connect_errno() . ":" . mysqli_connect_error();
        die();
    }
}

?>