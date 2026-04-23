<?php include "conect_db.php"; ?>
<?php
$id=$_GET['id'];
    $sql= "DELETE FROM t_candidatos WHERE `codigo` = ' ".$id." ' ";
     $result=mysqli_query($dbconn,$sql);
if(!$result)
    die("falha".mysqli_error($dbconn));
else

echo "<script>
 window.location=\"manutencao_dados.php\" </script>"
?>
