<?php
session_start();

include_once("conexao.php");
include_once("funcoes.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(!empty($email) && !empty($senha)){
        $usuario_id = random_num(20);
        $query = "INSERT INTO usuarios (usuario_id,email,senha) VALUES ('$usuario_id','$email','$senha')";

        mysqli_query($con, $query);

        header("location: login.html");
        die;
    } else{
        echo "Insira seus dados!";
    }
}
?>