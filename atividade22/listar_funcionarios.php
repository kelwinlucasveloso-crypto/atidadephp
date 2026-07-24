<?php
include "banco.php";


//sql listar os arquivos do banco de dados
$sql = "SELECT * FROM funcionario ";

//guardar na variavel resultado a consulta do banco de dados 
$resultado = $conexao->query($sql);

//iremos usar um laço de repetição while(enquanto)
//fetch_assoc()buscar um registro por vez do banco de dados
while ($cliente = $resultado->fetch_assoc()) {
    echo "nome:" . $cliente['nome'] .
        "<br>";
    echo "cargo:" . $cliente['cargo'] . "<br>";
    echo "departamento:" . $cliente['departamento'] . "<br>";
    echo "salario:" . $cliente['salario'] . "<br>";
    echo "admissao:" . $cliente['admissao'] . "<br>";

    echo '<a href="editar_funcionario.php?id=' . $cliente['id'] . '">
        <button>Editar</button>
      </a>';
}