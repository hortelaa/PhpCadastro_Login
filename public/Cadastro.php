<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Página de Cadastro</title>
        <link rel="stylesheet" href="../css/styles.css" />
    </head>
    <body class="bg-gray-200">
    <div class="relative flex items-center justify-center ">
    <main class="max-w-3xl p-8 mx-auto my-10 bg-white rounded-lg shadow-2xl">
        <section>
            <h3 class="text-2xl font-bold text-center">Cadastre-se no <a  class="text-rosacerto "href="Login.php">Painel</a> </h3>
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </section>
        <section class="mt-10">
            <!--Inicio Form-->
            <form method="POST" class="grid gap-4 lg:grid-cols-2" action="Cadastrar.php">
            <!--Nome Form-->
            <div class="pt-3 mb-6 bg-gray-200 rounded ">
                <label class="block mb-2 ml-3 text-sm font-bold text-gray-700 for=" email"">Nome Completo</label>
                <input required type="text" name="name" id="name" placeholder="Ex: Rodolfo Silva "class="w-full px-3 pb-3 text-gray-700 transition duration-500 bg-gray-200 border-b-4 border-gray-300 rounded focus:outline-none focus:border-rosacerto ">
            </div>
            <!--Email Form-->
            <div class="pt-3 mb-6 ml-6 bg-gray-200 rounded ">
                <label class="block mb-2 ml-3 text-sm font-bold text-gray-700 ">Email</label>
                <input required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type="email" name="email" id="email" placeholder="Ex: rodolfo32@gmail.com.br " class="w-full px-3 pb-3 text-gray-700 transition duration-500 bg-gray-200 border-b-4 border-gray-300 rounded focus:outline-none focus:border-rosacerto ">
            </div>
            <!--Usuario Form-->
            <div class="pt-3 mb-6 bg-gray-200 rounded">
                <label class="block mb-2 ml-3 text-sm font-bold text-gray-700 ">Usuário</label>
                <input required type=" text " name=" usuario" id="input" placeholder="Ex: RodolfoGames " class="w-full px-3 pb-3 text-gray-700 transition duration-500 bg-gray-200 border-b-4 border-gray-300 rounded focus:outline-none focus:border-rosacerto ">
            </div>
            <!--Data Form-->
            <div class="pt-3 mb-6 ml-6 bg-gray-200 rounded">
                <label class="block mb-2 ml-3 text-sm font-bold text-gray-700 ">Data de Cadastro</label> 
                <input type="date" readonly value="<?php echo date('Y-m-d'); ?>" name="data" id="input" class="w-full px-3 pb-3 transition duration-500 bg-gray-200 border-b-4 border-gray-300 rounded focus:outline-none focus:border-rosacerto ">
            </div>
            <!--Senha Form-->
            <div class="grid col-span-2 pt-3 mb-6 bg-gray-200 rounded ">
                <label class="block mb-2 ml-3 text-sm font-bold text-gray-700 ">Senha</label>
                <input type="password" required name="senha" id="input" placeholder="Ex: ************ " class="min-w-full px-3 pb-3 text-gray-700 transition duration-500 bg-gray-200 border-b-4 border-gray-300 rounded focus:outline-none focus:border-rosacerto ">
            </div>
            <!--Submit-->
            <div class="grid col-span-2">
                <button type="submit" class="h-16 shadow-lg rounded-xl bg-rosacerto text-md animbtnsite">
                    <span class="font-mono text-xl text-white">Enviar</span>
                </button>
            </div>
            </form>
        </section>
    </main>
    </div>
    </body>
</html>
