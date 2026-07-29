<?php
include "banco.php";

$id = $_POST['id'];

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];


$sql = "UPDATE funcionario SET
    nome = '$nome',
    cargo = '$cargo',
    departamento = '$departamento',
    salario = '$salario'
WHERE id = $id";

if ($conexao->query($sql)) {
    header("Location: listar_funcionario.php");
    exit();
} else {
    echo "Erro ao atualizar o cliente: " . $conexao->error;
}
?>