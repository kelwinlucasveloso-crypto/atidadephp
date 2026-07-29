<?php 
include"banco.php";

$id = $_GET['id'];

$sql = "DELETE FROM alunos WHERE id = $id";
if ($conexao->query($sql)) {
    header("Location: listar_alunos.php");
    exit();
} else {
    echo "Erro ao excluir o cliente: " . $conexao->error;
}

?>
