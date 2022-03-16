<?php
//Criar conexão com o Data Base
$usuario = 'root';
$senha = '';
$database = 'dec9teste';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}