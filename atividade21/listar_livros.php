<?php
include "banco.php";


//sql listar os arquivos do banco de dados
$sql = "SELECT * FROM livros";

//guardar na variavel resultado a consulta do banco de dados 
$resultado = $conexao->query($sql);

//iremos usar um laço de repetição while(enquanto)
//fetch_assoc()buscar um registro por vez do banco de dados
while ($cliente = $resultado->fetch_assoc()) {
    echo "titulo:" . $cliente['titulo'] .
        "<br>";
    echo "autor:" . $cliente['autor'] . "<br>";
    echo "editora:" . $cliente['editora'] . "<br>";
    echo "ano:" . $cliente['ano'] . "<br>";
    echo "quantidade:" . $cliente['quantidade'] . "<br>";

    echo '<a href="editar_livros.php?id=' . $cliente['id'] . '">
        <button>Editar</button>
      </a>';
}
