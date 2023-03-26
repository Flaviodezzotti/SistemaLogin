<?php
session_start();
include('verifica_login.php');
?>

<h2>Parabéns, você se conectou ao banco de dados, seja bem-vindo <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>