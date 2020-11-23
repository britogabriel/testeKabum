<?php

include_once 'UsuarioController.php';

$controller = new UsuarioController();

if (isset($_POST["btnEntrar"])) {
    if (isset($_POST["login_user"]) 
        and isset($_POST["login_password"]) 
        and (!empty($_POST["login_user"])) 
        and (!empty($_POST["login_password"]))) {
        if ($controller->getUsuario($_POST["login_user"], $_POST["login_password"])) {
            header('Location: view/ListarClientes.php');
            exit;
        }
    }
}

if (isset($_POST["btnCadastrar"])) {
    if (isset($_POST["cad_user"]) 
        and isset($_POST["cad_email"]) 
        and isset($_POST["cad_password"])
        and (!empty($_POST["cad_user"])) 
        and (!empty($_POST["cad_email"]))
        and (!empty($_POST["cad_password"]))) {
        $controller->cadastrarUsuario($_POST["cad_user"], $_POST["cad_email"], $_POST["cad_password"]);  
    }
}