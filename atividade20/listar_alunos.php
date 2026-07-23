<?php 
include "banco.php";



$sql = "SELECT * FROM alunos";

$resultado = $conexao->query($sql);

while ($cliente = $resultado -> fetch_assoc()) {
    echo "Nome Complento:".$cliente['nome'].
    "<br>";
    echo "idade:".$cliente['idade'] . "<br>";
    echo "curso:".$cliente['curso'] . "<br>";
    echo "cidade:".$cliente['cidade'] . "<br>";

}
?>