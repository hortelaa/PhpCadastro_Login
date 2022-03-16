<?php
session_start();
include_once("Conexao.php");

 $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
 $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
 $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
 $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
 
 
 echo "Email: $email <br>";
 echo "User: $usuario <br>";
 echo "Data: $data <br>";
 echo "Senha: $senha <br>";
 echo "Nome: $name <br>";


$result_usuario = "INSERT INTO cadastros (nome, email, usuario, senha, data) VALUES ('$name', '$email', '$usuario', '$senha', '$data')";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);

if(mysqli_insert_id($mysqli)){
	$_SESSION['msg'] = "<p class='mt-4 text-xl font-bold' align=center style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: Cadastro.php");
}else{
	$_SESSION['msg'] = "<p class='mt-4 text-xl font-bold' align=center style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: Cadastro.php");
}
