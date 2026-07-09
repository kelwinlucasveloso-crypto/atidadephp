<?php 
include "banco.php";


//sql listar os arquivos do banco de dados
$sql = "SELECT * FROM Form";

//guardar na variavel resultado a consulta do banco de dados 
$resultado = $conexao->query($sql);

//iremos usar um laço de repetição while(enquanto)
//fetch_assoc()buscar um registro por vez do banco de dados
while ($cliente = $resultado -> fetch_assoc()) {
    echo "Nome Complento:".$cliente['nome'].
    "<br>";
    echo "Cidade:".$cliente['cidade'] . "<br>";
    echo "idade:".$cliente['idade'] . "<br>";

}
?>