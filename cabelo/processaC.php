<?php
include_once('conecta.php');
$conexao = conectar();

if (isset($_POST['enviar'])) {
    
    $shampoo = $_POST['shampoo'];
    $condicionador = $_POST['condicionador'];
    $mascara = $_POST['mascara'];
    $creme = $_POST['creme'];
    $reparador = $_POST['reparador'];



    $sql = "INSERT INTO cabelo (shampoo, condicionador, mascara, creme, reparador) VALUES ('$shampoo','$condicionador','$mascara','$creme','$reparador')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado == true){
        header("Location:index.php");
    } else {
        echo mysqli_errno($conexao) . mysqli_error($conexao);
    }
    
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $shampoo = $_POST['shampoo'];
    $condicionador = $_POST['condicionador'];
    $mascara = $_POST['mascara'];
    $creme = $_POST['creme'];
    $reparador = $_POST['reparador'];

    $sql = "UPDATE cabelo SET shampoo='$shampoo', condicionador='$condicionador', mascara='$mascara', creme='$creme', reparador='$reparador' WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:index.php");
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM cabelo WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:index.php");
}