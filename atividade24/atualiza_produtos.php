<?php
include "banco.php";

$id = $_POST['id'];

$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql = "UPDATE produtos SET
    nome = '$nome',
    categoria = '$categoria',
    quantidade = '$quantidade',
    preco = '$preco',
WHERE id = $id";

if ($conexao->query($sql)) {
    header("Location: listar_produtos.php");
    exit();
} else {
    echo "Erro ao atualizar o cliente: " . $conexao->error;
}
?>