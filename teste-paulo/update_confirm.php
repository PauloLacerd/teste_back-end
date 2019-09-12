<?php
	require_once 'connect.php';

	$id = $_POST['id'];
	$email = $_POST['email'];
	$nome = $_POST['nome'];
	$cidade = $_POST['cidade'];

	if (!isset($id) || !isset($email) || !isset($cidade) || !isset($nome)) {
		echo "Erro ao atualizar os dados";
	}else{
		$sql = "UPDATE usuario SET nome = '$nome', email = '$email', cidade='$cidade' WHERE id = '$id'";

		if( $con->query($sql) === TRUE){
            header('location: /teste-paulo/index.php');
        }else{
            echo "<div>Erro ao alterar usuario</div>";
        }
	}
?>