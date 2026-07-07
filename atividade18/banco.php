<?php 
$host = "localhost";
$usuario = "root";
$senha = "senac";
$banco ="guarda";
$porta = "3307";


$conexao = new mysqli(
$host,
$usuario,
$senha,
$banco,
$porta
);

($conexao->connect_error)


?>