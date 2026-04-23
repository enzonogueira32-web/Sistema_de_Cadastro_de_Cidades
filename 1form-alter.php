</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alterar Valores</title>
</head>
<body>
<h1>Sistema de Alteração</h1>
<p>Insira os novos valores:</p>
<form method="POST" action="alterar_cidade.php?id=<?php echo $_GET['id']; ?>">
<?php
session_start();
require 'conect_db.php';
$id=$_GET['id'];
//aqui começa o codigo PHP que trabalha com BD
$resultado = mysqli_query($dbconn,"SELECT * FROM t_candidatos where `codigo` = '".
$id."' ");//WHERE `codigo` = '".$id."'"
if($resultado){
while($row =mysqli_fetch_assoc($resultado)){
?>
<label> codigo: </label>
<br>
<input type="text" name="codigo" id="codigo" value= "<?php echo $row['codigo'];?>"/>
<label> nome: </label>
<br>
<input type="text" name="nome" id="nome" value= "<?php echo $row['nome'];?>"/>
<label> profissao: </label>
<br>
<input type="text" name="profissao" id="profissao" value= "<?php echo $row['profissao'];?>"/>
<br><br>
<label> CPF: </label>
<br>
<input type="text" name="cpf" id="cpf" value="<?php echo $row['cpf'];?>">
<br><br>
<?php }
}
?>
<input type="submit" value="Alterar" name="alterar"/>

</form>
</body>
</html>