<?php
include("conectadb.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $preco = $_POST['preco'];
    #$img1 = $_POST['img1'];
    #$img2 = $_POST['img2'];

    #if ($img1 == "") $img1 = "semimg.gif";
    #if ($img1 == "") $img2 = "semimg.gif";


    #Verifica se produto já está cadastrado
    $sql = "SELECT COUNT(pro_id) FROM produtos WHERE pro_nome = '$nome'";
    $resultado = mysqli_query($link, $sql);

    while ($tbl = mysqli_fetch_array($resultado)) {
        $cont = $tbl[0];
        if ($cont == 1) {
            echo "<script>window.alert('PRODUTO JÁ CADASTRADO!');</script>";
        } else {

            #LINHA ABAIXO É PARA INSERÇÃO DE IMAGENS
            #$sql = "INSERT INTO produtos(pro_nome,pro_quantidade,pro_preco,img1,img2,pro_descricao,pro_ativo) values ('$nome','$quantidade','$preco','$img1','$img2','$descricao','s')";
            $sql = "INSERT INTO produtos(pro_nome, pro_descricao, pro_quantidade, pro_preco, pro_ativo) VALUES('$nome', '$descricao', '$quantidade', '$preco', 's')";
            mysqli_query($link, $sql);
            header("Location: listaproduto.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Produtos</title>
    <link rel="stylesheet" href="newestilo.css">
</head>

<body>
    <a href="homesistema.html"><input type="button" id="menuhome" value="HOME SISTEMA"></a>
    <div>
        <form action="cadastraproduto.php" method="post">
            <label>NOME</label>
            <input type="text" name="nome">
            <br></br>
            <label>DESCRIÇÃO</label>
            <input type="text" name="descricao">
            <br></br>
            <label>QUANTIDADE</label>
            <input type="number" name="quantidade">
            <br></br>
            <label>PRECO</label>
            <input type="decimal" name="preco">
            <br></br>

            <!-- BLOCO DE CÓDIGO NOVO -->

            <label>IMAGEM</label>
            <input type="file" name="foto1" id="img1" onchange="foto1()">
            <img src="img/semfoto.png" width="100px" id="foto1a">

            
            <br>
            <input type="submit" value="CADASTRAR">

        </form>
        <script>
            function foto1() {
                document.getElementById("foto1a").src = "img/"(document.getElementById("img1").value).slice(12);
            }

            function foto2() {
                document.getElementById("foto2a").src = "img/" + (document.getElementById("img2").value).slice(12);
            }
        </script>
        
    </div>
</body>


</html>