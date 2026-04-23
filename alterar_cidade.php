<?php
session_start();
$id = $_GET['id'];
$codigo = $_POST['codigo'];
$nome= $_POST['nome'];
$profissao= $_POST['profissao'];
$cpf= $_POST['cpf'];

include 'conect_db.php';

$resultado = mysqli_query ($dbconn, " UPDATE t_candidatos SET nome = '$nome', profissao = '$profissao', cpf = '$cpf' WHERE `codigo` = '$codigo' ");
mysqli_close($dbconn);

echo"<script>
 window.location=\"manutencao_dados.php\"
 </script>";
?>