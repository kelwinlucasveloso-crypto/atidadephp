<?php
include "banco.php";


$sql = "SELECT * FROM produtos ";

$resultado = $conexao->query($sql);

while ($cliente = $resultado->fetch_assoc()) {
    echo "nome:" . $cliente['nome'] .
        "<br>";
    echo "categoria:" . $cliente['categoria'] . "<br>";
    echo "quantidade:" . $cliente['quantidade'] . "<br>";
    echo "preco:" . $cliente['preco'] . "<br>";
 
     
    echo '<a href="formulario24.php?id=' . $cliente['id'] . '">
        <button>Cadastrar</button>
      </a>';
    echo '<a href="editar_produtos.php?id=' . $cliente['id'] . '">
        <button>Editar</button>
      </a>';
      
    echo '<a href="excluir_produtos.php?id=' . $cliente['id'] . '">
        <button>Excluir</button>
      </a>';
}