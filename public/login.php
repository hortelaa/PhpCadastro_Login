<?php
include("Conexao.php");

if(isset($_POST['login']) || isset($_POST['senha'])) {

    if(strlen($_POST['login']) == 0) {
        echo "Preencha seu login";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        $sql_code = "SELECT * FROM cadastros WHERE ( usuario='$login' OR email = '$login') AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['data'] = $usuario['data'];
            $_SESSION['usuario'] = $usuario['usuario'];
            header("Location: painel.php");
    }else {
        $_SESSION['msg'] = "<p class='mt-4 text-xl font-bold' align=center style='color:green;'>Usuário cadastrado com sucesso</p>";
	    header("Location: Login.php");
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Página de Login</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/styles.css" />
    </head>
    <body class="overflow-hidden">
        <!--Section Principal-->
        <section class="hidden grid-cols-1 xl:grid xl:grid-cols-2">
            <!--Imagem de Fundo-->
            <div class="xl:bg-no-repeat xl:bg-contain lg:flex max-w-none xl:bg-shape-background" ></div>
            <div class="grid items-center justify-start grid-rows-4 ml-32">
                <!--Texto Principal-->
                <div class="text-center xl:mb-16">       
                <h1 class="text-3xl font-semibold xl:text-5xl">Faça login no  <span class="text-rosacerto">painel</span> </h1>
                </div>
                <div class="-mb-10 xl:-mt-24">
                    <form  method="POST" action="">
                        <!--Nome de Usuário-->
                        <div class="xl:mb-4">
                            <label class="mt-4 font-sans text-md" for="User">Nome de usuário ou Endereço de Email:</label>
                            <input class="block w-auto h-16 px-4 py-2 border border-gray-500 appearance-none xl:mt-4 xl:mb-4 placeholder:pl-6 focus:outline-none rounded-xl xl:w-96" type="text" name="login" placeholder="Digite o seu usuário ou email">
                        </div>  
                        <!--Senha-->                      
                        <div>
                            <label class="font-sans text-md" for="Password">Senha:</label>
                            <input class="block h-16 px-4 py-2 border border-gray-500 appearance-none xl:mt-4 xl:mb-4 placeholder:pl-6 focus:outline-none rounded-xl xl:w-96" name="senha" type="password" placeholder="Senha">
                        </div> 
                        <!--Parte Inferior-->
                        <div class="grid grid-cols-2">
                            <!--Mantenha me Conectado-->
                            <label class="block " for="">
                                <input class="mr-2 leading-tight" type="checkbox">
                                <span class="text-sm">
                                    Mantenha-me conectado
                                  </span>
                            </label>
                            <!--Esqueci minha Senha-->
                            <div class="flex items-end ">
                                <button class="text-sm text-blue-300 xl:ml-12 hover:text-blue-500">Esqueceu a senha?</button>
                            </div>
                        </div> 
                        <!--Botões-->
                        <div class="grid grid-cols-2 xl:pt-10">
                            <!--Entrar-->
                            <div>
                                <input type="submit" name="btnLogin" class="w-24 h-12 text-white shadow-md xl:w-48 text-md rounded-xl animbtnsite bg-azulbotao">
                            </div>
                            <!--Cadastrar-->
                            <div>
                                <button id="cadastro" class="w-24 h-12 text-white shadow-md xl:w-48 text-md rounded-xl animbtnsite bg-rosacerto">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--Mobile-->
        <section class="flex items-center justify-center min-h-screen bg-gray-200 bg-cover min-w-screen xl:hidden">
            <!--White Box-->
            <div class="grid max-w-3xl grid-cols-1 gap-4 p-8 mx-auto my-10 bg-white rounded-lg shadow-md">
                    <div class="py-6">
                    <!--Texto Principal-->
                    <h1 class="text-3xl font-semibold xl:text-5xl">Faça login no  <span class="text-rosacerto">Painel</span> </h1>
                    </div>
                    <!--Formulario-->
                        <form method="POST" class="w-full max-w-lg ml-auto mr-auto" action="">
                            <!--Login-->
                            <div>
                                <label class="mt-4 font-sans " for="">Usuário ou Email:</label>
                                <input class="block px-4 py-2 border border-gray-500 appearance-none placeholder:pl-6 focus:outline-none rounded-xl" type="text" name="login" placeholder="USER/EMAIL">
                            </div>
                            <!--Senha-->
                            <div>
                                <label class="mt-4 font-sans " for="">Senha:</label>
                                <input class="block px-4 py-2 border border-gray-500 appearance-none placeholder:pl-6 focus:outline-none rounded-xl" type="password" name="senha" placeholder="***********">
                            </div>
                            <div class="grid grid-cols-2 mt-10">
                            <!--Entrar-->
                            <div>
                                <input type="submit" name="btnLogin" class="w-24 h-12 text-white shadow-md xl:w-48 text-md rounded-xl animbtnsite bg-azulbotao">
                            </div>
                            <!--Cadastrar-->
                            <div>
                                <button id="cadastro" class="w-24 h-12 text-white shadow-md xl:w-48 text-md rounded-xl animbtnsite bg-rosacerto">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                        </form>
            </div>
        </section>
        <!--Script para redirecionar o botão-->
        <script>
            $('#cadastro').click(function() {
                window.location.href = 'Cadastro.php';
                return false;
            });
        </script>
    </body>
</html>
