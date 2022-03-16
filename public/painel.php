<?php
//Inciar a session para mostrar as informações gravadas na mesma
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css" />
	<title>Painel</title>
</head>
<!--Plano de fundo cinza-->
<body class="bg-gray-200">
	<section class="flex items-center justify-center max-w-3xl mx-auto my-10">
		<!--White Box-->
		<div class="grid gap-4 bg-white rounded-lg shadow-sm">
		<div>
			<!--Texto Principal-->
			<h1 class="m-6 text-2xl font-bold ">Seja bem vindo ao painel <span class="italic text-rosacerto"><?php echo $_SESSION['nome']; ?>.</span> </h1>
		</div>
		<div>
			<!--Texto Auxiliar-->
			<h1 class="text-xl font-thin text-center ">Estes são seus dados:</h1>
		</div>
		<!--Email-->
			<div class="text-center">
				<h1 class="mx-6 text-xl">Email: <span><?php echo $_SESSION['email']; ?></span> </h1>
			</div>
			<!--User-->
			<div class="text-center">
				<h1 class="mx-6 text-xl">Usuario: <span><?php echo $_SESSION['usuario']; ?></span> </h1>
			</div>
			<!--Nome-->
			<div class="text-center">
				<h1 class="mx-6 text-xl">Nome: <span><?php echo $_SESSION['nome']; ?></span> </h1>
			</div>
			<!--Data-->
			<div class="text-center">
				<h1 class="mx-6 text-xl">Data Cadastrada: <span><?php echo $_SESSION['data']; ?></span> </h1>
				<p class="py-6">
        			<a class="text-xl hover:text-rosacerto" href="logout.php"><big>Sair</big></a>
    			</p>
			</div>
		</div>
	</section>
</body>
</html>