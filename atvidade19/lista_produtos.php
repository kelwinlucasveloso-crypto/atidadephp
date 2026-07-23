<?php 
include "banco.php";



$sql = "SELECT * FROM produtos";

$resultado = $conexao->query($sql);

while ($cliente = $resultado -> fetch_assoc()) {
    echo "Nome Complento:".$cliente['nome'].
    "<br>";
    echo "quantidade:".$cliente['quantidade'] . "<br>";
    echo "preco:".$cliente['preco'] . "<br>";

}
?>