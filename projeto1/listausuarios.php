<?php
include("conectadb.php");

$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UAtestedbompatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA USUARIOS</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div>
        <table border="1">
            <tr>
                <th>NOME</th>
                <th>ALTERAR</th>
                <th>EXCLUIR</th>
            </tr>
            <?php
            while ($tbl = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?= $tbl[1] ?></td>
                    <td><a href="alterausuario.php?id=<?= $tbl[0] ?>"><input type="button" value="ALTERAR"></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>