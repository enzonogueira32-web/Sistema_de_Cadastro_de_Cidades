<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once 'conect_db.php' ?>
</head>

<body>

    <p></p>
    <h1> Listar dados </h1>
    <table border="2" id="">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Profissão</th>
                <th>CPF</th>
                <th>Alterar</th>
                <th>Excluir</th>
            </tr>
            <thead>
                <?php //aqui começa o codigo PHP que trabalha com BD
                $resultado = mysqli_query($dbconn, "SELECT * FROM t_candidatos");
                if ($resultado) {
                    while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
            <tbody>
                <tr>
                    <td>
                        <?php echo "<p></p>", $row['codigo']; ?>
                    </td>
                    <td><?php echo "<p></p>", $row['nome']; ?> </td>
                    <td><?php echo "<p></p>", $row['profissao']; ?> </td>
                    <td><?php echo "<p></p>", $row['cpf']; ?> </td>
                    <td><a href="1form-alter.php?id=<?php echo $row['codigo']; ?>"> Alterar </a> </td>
                    <td><a href="excluir.php?id=<?php echo $row['codigo']; ?>"> Excluir </a> </td>
                </tr>
            </tbody>
    <?php
                    }
                }
                mysqli_close($dbconn);
    ?>
    </table>
    <a href="cadastro-1.php">Voltar</a>
</body>

</html>