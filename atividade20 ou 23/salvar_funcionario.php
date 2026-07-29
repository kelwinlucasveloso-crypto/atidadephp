<?php 
include "banco.php";
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$curso = $_POST['curso'];
$cidade = $_POST['cidade'];

 
$sql ="INSERT INTO alunos (nome, idade, curso, cidade)
VALUES('$nome', '$idade', '$curso', '$cidade')"; 

if($conexao->query($sql)) { 
   echo"Dados salvos com sucesso!";
}
else{
    echo"Erro ao salvar os dados!";
}
?>