<?php 
include "banco.php";
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];

 
$sql ="INSERT INTO funcionario (nome, cargo, departamento, salario)
VALUES('$nome', '$cargo', '$departamento' , '$salario')"; 

if($conexao->query($sql)) { 
   echo"Dados salvos com sucesso!";
}
else{
    echo"Erro ao salvar os dados!";
}
?>