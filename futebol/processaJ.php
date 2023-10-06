<?php
include_once('conecta.php');
$conexao = conectar();

if (isset($_POST['cadastrar'])) {

    
    $tim = $_POST['tim'];
    $jogador = $_POST['jogador'];
    $pontos = $_POST['pontos'];


    $sql = "INSERT INTO fut (tim , jogador, pontos) VALUES ('$tim','$jogador','$pontos')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado == true){
        header("Location:index.php");
    } else {
        echo mysqli_errno($conexao) . mysqli_error($conexao);
    }
    
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $tim = $_POST['tim'];
    $jogador = $_POST['jogador'];
    $pontos = $_POST['pontos'];
 
    $sql = "UPDATE fut SET tim='$tim', jogador='$jogador', pontos='$pontos'";
    mysqli_query($conexao, $sql);
    header("Location:index.php");
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM fut WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:listAnimal.php");
}