<?php

//Deslogar ao clicar em sair no painel

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: login.php");