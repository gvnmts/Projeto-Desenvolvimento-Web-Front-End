<?php
session_start();

include_once "conexao.php";
?>

<!DOCTYPE html>
<body>
<?php
    $usuario_id = $_GET['usuario_id'];
	$query = "DELETE FROM usuarios WHERE usuario_id=$usuario_id";
	
    mysqli_query($con,$query);
        
	echo("<script>alert('Usuário excluído com sucesso'); window.location.href='lista_usuarios.php'; </script>");
?>
</body>
</html>