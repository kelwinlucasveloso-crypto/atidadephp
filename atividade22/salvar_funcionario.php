<?php 
include "banco.php";
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$departamento = $_POST['departamento'];
$salario = $_POST['salario'];
$admissao = $_POST['admissao'];
 
$sql ="INSERT INTO funcionario (nome, cargo, departamento, salario, admissao)
VALUES('$nome', '$cargo', '$departamento' , '$salario', '$admissao')"; 

if($conexao->query($sql)) { 
   echo"Dados salvos com sucesso!";
}
else{
    echo"Erro ao salvar os dados!";
}
?>