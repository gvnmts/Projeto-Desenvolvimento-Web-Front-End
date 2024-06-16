<?php
session_start();

include_once "conexao.php";

if (!empty($_SESSION['usuario_id'])){ 
    $usuario_id = $_SESSION["usuario_id"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];

    if($usuario_id>0) {
		$query = "UPDATE usuarios SET email='$email', senha='$senha' WHERE usuario_id = $usuario_id"; 
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