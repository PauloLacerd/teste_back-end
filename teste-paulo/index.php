<?php
	include "connect.php";

	$sql = 'SELECT * FROM usuario';
	$result = mysqli_query($con,$sql);

	$usuarios = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<html lang="pt-br" !DOCTYPE>
<head>
	<title></title>
</head>
<body>
	<h1>LISTAR USUÁRIOS</h1> <br><br>
	<table border="1">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>Cidade</th>
				<th>Ações</th>
			</tr>
		</thead>

		<tbody>
		<?php foreach ($usuarios as $key => $value) { ?>
			<tr>
				<td> <?php echo $value['nome']; ?></td>
				<td> <?php echo $value['email']; ?></td>
				<td> <?php echo $value['cidade']; ?></td>
				<td><a href="delete.php?id=<?php echo $value['id']; ?>">Deletar</a></td>
				<td><a href="alterar.php?id=<?php echo $value['id']; ?>">Alterar</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<h1>ALTERAR USUÁRIO</h1> <br><br>
	<form action="create.php" method="POST">
		<label for="nome">Nome: </label>
		<input type="text" name="nome" id="nome"/><br/><br/>
		<label for="email">E-mail: </label>
		<input type="text" name="email" id="email"/><br/><br/>
		<label for="cidade">Cidade: </label>
		<input type="text" name="cidade" id="cidade"><br/><br/>
		<button type="submit">Salvar</button>
	</form>
	</table>
</body>
</html>
