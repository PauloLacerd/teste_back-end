<?php
	require_once 'connect.php';

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM usuario WHERE id = '$id'";

	$result = mysqli_query($con,$sql);
	$aux = mysqli_fetch_all($result,MYSQLI_ASSOC);
	$usuario = $aux[0];

?>

<h1>ALTERAR USUÁRIO</h1> <br><br>
	<form action="update_confirm.php" method="POST">
		<label for="nome">Nome: </label>
		<input type="text" name="nome" id="nome" value="<?php echo $usuario['nome'] ?>"/><br/><br/>
		<label for="email">E-mail: </label>
		<input type="text" name="email" id="email" value="<?php echo $usuario['email'] ?>"/><br/><br/>
		<label for="cidade">Cidade: </label>
		<input type="text" name="cidade" id="cidade" value="<?php echo $usuario['cidade'] ?>"><br/><br/>
		<input type="number" value="<?php echo $usuario['id'] ?>" name="id" id="id" hidden="true">
		<button type="submit">Salvar</button>
	</form>