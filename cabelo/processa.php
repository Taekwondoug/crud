<?php
include_once('conecta.php');
$conexao = conectar();

if (isset($_POST['enviar'])) {

    var_dump($_POST);
    
    $shampoo = $_POST['shampoo'];
    $condicionador = $_POST['condicionador'];
    $mascara = $_POST['mascara'];
    $creme = $_POST['creme'];
    $reparador = $_POST['reparador'];



    $sql = "INSERT INTO cabelo (shampoo, condicionador, mascara, creme, reparador) VALUES ('$shampoo','$condicionador','$mascara','$creme','$reparador')";
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado == true){
        header("Location:list.php");
    } else {
        echo mysqli_errno($conexao) . mysqli_error($conexao);
    }
    
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $cor = $_POST['cor'];
    $raca = $_POST['raca'];
    $foto = $_POST['foto'];

    $sql = "UPDATE animal SET nome='$nome', tipo='$tipo' cor='$cor' raca='$raca' foto='$foto' WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:listAnimal.php");
}

if (isset($_GET['deletar'])) {
    $id = $_GET['deletar'];

    $sql = "DELETE FROM animal WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location:listAnimal.php");
}