<?php

include_once 'ClienteController.php';

$controller = new ClienteController();

if (isset($_POST["btnNovoCliente"])) {
    header('Location: EditarCliente.php');
    exit;
}

if (isset($_POST["btnCadCliente"])) {
    $controller->cadastrarCliente($_POST["cad_nome"], $_POST["cad_dataNasc"], $_POST["cad_cpf"], $_POST["cad_rg"], $_POST["cad_tel"]);
    header('Location: ListarClientes.php');
    exit;
}