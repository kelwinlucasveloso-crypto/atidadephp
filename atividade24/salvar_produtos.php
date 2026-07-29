<?php 
include "banco.php";
$nome = $_POST['nome'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$sql ="INSERT INTO produtos (nome, cargo, departamento, salario)
VALUES('$nome', '$categoria', '$quantidade' , '$preco')"; 

if($conexao->query($sql)) { 
   echo"Dados salvos com sucesso!";
}
else{
    echo"Erro ao salvar os dados!";
}
?>