<?php
session_start();

include_once("conexao.php");
include_once("funcoes.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(!empty($email) && !empty($senha)){
        $query = "SELECT * FROM usuarios WHERE email = '$email' limit 1";
        
        $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['senha'] === $senha){
                    $_SESSION['usuario_id'] = $user_data['usuario_id'];
                    header("location: index.php");
                    die;
                }
            }
        }
    } else{
        echo "Insira seus dados!";
    }
}
?>