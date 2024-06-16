<?php 
session_start();

include_once "conexao.php";

try{
    echo "<table border='1'>
    <tr>
        <td>ID de Usuário</td>
        <!--<td>Nome</td>-->
        <td>Email</td>
        <td>Data de Registro</td>
        <td colspan='2'>Ações</td>
    </tr>";
    
    $query = "SELECT * FROM usuarios";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){
        while($linha = mysqli_fetch_assoc($result)){
?>
            <tr>
                <td><?php echo($linha['usuario_id']); ?></td>
                <!--<td><?php/* echo($linha['nome']); */?></td>-->
                <td><?php echo($linha['email']); ?></td>
                <td><?php echo($linha['data']); ?></td>
                <td><a href="editar_usuario.php?usuario_id=<?php echo($linha['usuario_id']); ?>">Alterar</a></td>
                <td><a href="excluir_usuario.php?usuario_id=<?php echo($linha['usuario_id']); ?>">Excluir</a></td>"
            </tr>
<?php
        }
        echo "</table>";    
    }
} 
catch(PDOException $e){
    echo ("Erro: ". $e->getMessage());
}
?>