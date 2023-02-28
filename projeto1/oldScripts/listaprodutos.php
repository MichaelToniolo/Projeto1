
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTA PRODUTOS</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <a href="homesistema.html"><input type="button" name="voltarhomesistema" value="HOME SISTEMA"></a>
    <div>
        <table border="1">
            <tr>
                <th>NOME</th>
                <th>DESCRICAO</th>
                <th>CATEGORIA</th>
                <th>IMAGEM</th>
                <th>IMAGEM</th>
                <th>ESTOQUE</th>
                <th>VALOR</th>
                <th>ALTERAR</th>
                <th>EXCLUIR</th>
            </tr>
            <?php

            include("conectadb.php");
            $sql = "SELECT * FROM produtos";
            $resultado = mysqli_query($link, $sql);

            while ($tbl = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <td><?= $tbl[1] ?></td>
                    <td><?= $tbl[4] ?></td>
                    <td><?= $tbl[5] ?></td>
                    <td><?= $tbl[6] ?></td>
                    <td><?= $tbl[7] ?></td>
                    <td><?= $tbl[2] ?></td>
                    <td>R$ <?= $tbl[3] ?></td>
                    <td><a href="alterarproduto.php?id=<?= $tbl[0] ?>"><input type="button" value="ALTERAR"></a></td>
                    <td><a href="excluirprodutos.php?id=<?= $tbl[0] ?>"><input type="button" value="EXCLUIR"></a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>