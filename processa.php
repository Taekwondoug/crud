<?php
include_once('conecta.php');
$conexao = conectar();

if (isset($_POST['cadastrar'])) {

    var_dump($_POST);
    
    $raca = $_POST['raca'];
    $tipo = $_POST['tipo'];
    $cor = $_POST['cor'];
    $nome = $_POST['nome'];

    $sql = "INSERT INTO animal (raca, tipo, cor, nome, foto) VALUES ('$raca','$tipo','$cor','$nome','$novo_nome')";
    mysqli_query($conexao, $sql);
    header("Location:animais.php");
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