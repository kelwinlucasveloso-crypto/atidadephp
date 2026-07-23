<?php
include "banco.php";

$id = $_POST['id'];

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$quantidade = $_POST['quantidade'];

$sql = "UPDATE livros SET
    titulo = '$titulo',
    autor = '$autor',
    editora = '$editora',
    ano = '$ano',
    quantidade = '$quantidade'
WHERE id = $id";

if ($conexao->query($sql)) {
    header("Location: listar_livros.php");
    exit();
} else {
    echo "Erro ao atualizar o cliente: " . $conexao->error;
}
?>