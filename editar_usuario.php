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
		<p><label>ID de Usuário:</label>
			<input type="text" name="usuario_id" value="<?php echo($usuario_id); ?>"><br>
		</p>
		<!--<p><label>Nome:</label>
            <input type="text" name="nome" maxlength="80" size="50" required value="<?php/* echo($campo['nome']); */?>">
        </p>-->
        <p><label>Email:</label>
			<input type="text" name="email" required value="<?php echo($campo['email']); ?>">
        </p>
		<p><input type="submit" value="Atualizar">
            <input type="reset" value="Redefinir">
        </p>
	</form>
</main>
</body>
</html>