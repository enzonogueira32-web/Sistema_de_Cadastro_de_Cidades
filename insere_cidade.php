<?php
require_once 'conect_db.php';
$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$profissao = $_POST['profissao'];
$cpf = $_POST['cpf'];

mysqli_query ($dbconn, "INSERT INTO t_candidatos (codigo,nome,profissao,cpf) VALUES ('$codigo','$nome','$profissao','$cpf')") or die(mysqli_error($dbconn));
mysqli_close( $dbconn );
echo "<script>
window.location=\"manutencao_dados.php\"
</script>"
?>