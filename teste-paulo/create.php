<?php
require_once 'connect.php';
//require_once 'header.php';
?>


<?php

if(isset($_POST['nome'])){
    if(empty($_POST['nome']) || empty($_POST['cidade'])
        || empty($_POST['email']))
    {
        echo "Por favor preencha os campos.";
    }else{
        $nome = $_POST['nome'];
        $cidade = $_POST['cidade'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO usuario(nome,email,cidade)
        VALUES('$nome','$email','$cidade')";

        if( $con->query($sql) === TRUE){
            header('location: /teste-paulo/index.php');
        }else{
            echo "<div>Erro ao inserir novo usuario</div>";
        }
    }
}
?>