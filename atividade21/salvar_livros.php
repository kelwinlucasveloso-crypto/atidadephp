<?php 
include "banco.php";
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$quantidade = $_POST['quantidade'];
 
$sql ="INSERT INTO livros (titulo, autor, editora, ano, quantidade)
VALUES('$titulo', '$autor', '$editora' , '$ano', '$quantidade')"; 

if($conexao->query($sql)) { 
   echo"Dados salvos com sucesso!";
}
else{
    echo"Erro ao salvar os dados!";
}
?>