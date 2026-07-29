<?php
include "banco.php";


$sql = "SELECT * FROM funcionario ";


$resultado = $conexao->query($sql);


while ($cliente = $resultado->fetch_assoc()) {
    echo "nome:" . $cliente['nome'] .
        "<br>";
    echo "cargo:" . $cliente['cargo'] . "<br>";
    echo "departamento:" . $cliente['departamento'] . "<br>";
    echo "salario:" . $cliente['salario'] . "<br>";
  
     
     
    
    echo '<a href="formulario25.php?id=' . $cliente['id'] . '">
        <button>Cadastrar</button>
      </a>';
    echo '<a href="editar_funcionario.php?id=' . $cliente['id'] . '">
        <button>Editar</button>
      </a>';
      
    echo '<a href="excluir_funcionario.php?id=' . $cliente['id'] . '">
        <button>Excluir</button>
      </a>';
}