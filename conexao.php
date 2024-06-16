<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "slimfit";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
  die("A conexão falhou: " . $con->connect_error);
} else {
  echo "Conectado com sucesso";
}
?>