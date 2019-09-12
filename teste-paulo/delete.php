<?php
	require_once 'connect.php';

	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$sql = "DELETE FROM usuario WHERE id = '$id'";

		if ($con->query($sql) === TRUE) {
			header('location: /teste-paulo/index.php');
			//echo "Usuário deletado com sucesso";
		}else{
			echo "Usuário não pode ser deletado";
		}

	}
?>