<?php
session_start();

include_once "conexao.php";

$usuario_id=$_GET["usuario_id"];
		
$query = "SELECT * FROM usuarios WHERE usuario_id=$usuario_id";
$listar = mysqli_query($con,$query);
$campo = mysqli_fetch_array($listar);
?>

<!DOCTYPE html>
<body>
	<main>
	<h2>Editando usuário</h2>
	<form method="post" action="atualiza_usuario.php">
        <p><label>Email:</label>
			<input type="text" name="email" required value="<?php echo($campo['email']); ?>">
        </p>
		<p><label>Senha:</label>
			<input type="password" name="senha" required value="<?php echo($campo['senha']); ?>">
        </p>
		<p><input type="submit" value="Atualizar">
            <input type="reset" value="Redefinir">
        </p>
	</form>
</main>
</body>
</html>