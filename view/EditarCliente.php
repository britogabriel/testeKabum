<?php 
  include_once '../controller/edicao.php';
  $controller = new ClienteController();
  $clientes = $controller->getClientes(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Cliente</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <div class="editar">
        <div class="form">
            <form method="post">
                <input type="text" name="cad_nome" placeholder="Nome"/>
                <input type="text" name="cad_dataNasc" placeholder="Data de Nascimento"/>
                <input type="text" name="cad_cpf" placeholder="CPF"/>
                <input type="text" name="cad_rg" placeholder="RG"/>
                <input type="text" name="cad_tel" placeholder="Telefone"/>
                <button type="submit" name="btnCadCliente">SALVAR</button>
            </form>
        </div>
    </div>
</body>
</html>