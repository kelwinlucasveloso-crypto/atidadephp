<?php 
include"banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM funcionario WHERE id = $id";
if ($conexao->query($sql)) {
    header("Location: listar_funcionarios.php");
    exit();
} else {
    echo "Erro ao excluir o cliente: " . $conexao->error;
}

?>