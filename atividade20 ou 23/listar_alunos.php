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

echo '<a href="formulario20.php?id=' . $cliente['id'] . '">
        <button>Cadastrar</button>
      </a>';
    echo '<a href="editar_alunos.php?id=' . $cliente['id'] . '">
        <button>Editar</button>
      </a>';
      
    echo '<a href="excluir_alunos.php?id=' . $cliente['id'] . '">
        <button>Excluir</button>
      </a>';


}
?>