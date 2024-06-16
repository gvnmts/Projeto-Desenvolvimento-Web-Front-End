<?php
session_start();

include_once "conexao.php";

if (!empty($_POST['usuario_id'])){ 
    $usuario_id = $_POST["usuario_id"];
    /*$nome=strtoupper($_POST["nome"]);*/
    $email=$_POST["email"];

    if($usuario_id>0) {
		$query = "UPDATE usuarios SET /*nome='$nome',*/ email='$email' WHERE usuario_id = $usuario_id"; 
    }
    if(mysqli_query($con,$query)){
        echo('<script> alert("Usuário atualizado com sucesso"); window.location.href="lista_usuarios.php";</script>');}
    else{
        echo('<script> alert("Falha na execução"); window.location.href="lista_usuarios.php";</script>');
    }	
} else{
    echo('<script> alert("Dados incompletos, preencha todos os campos!"); window.location.href="lista_usuarios.php";</script>');
}
?>