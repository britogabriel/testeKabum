<?php 
  include_once '../controller/edicao.php';
  $clientes = $controller->getClientes(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Clientes</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/listaClientes.css">
</head>
<body>
	<form method="post"><button type="submit" name="btnNovoCliente">CADASTRAR</button></form>
	<table>
		<thead>
			<tr class="tablehead">
				<th class="colCod">Código</th>
				<th class="colNome">Nome</th>
				<th class="colCpf">CPF</th>
				<th class="colTel">Telefone</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($clientes as $c) { ?>
				<tr>
					<td class="colCod">  <?php echo $c['id'] ?> </td>
					<td class="colNome"> <?php echo $c['nome'] ?> </td>
					<td class="colCpf">  <?php echo $c['cpf'] ?> </td>
					<td class="colTel">  <?php echo $c['telefone'] ?> </td>
                </tr>
			<?php } ?>        
		</tbody>
	</table>
</body>
</html>