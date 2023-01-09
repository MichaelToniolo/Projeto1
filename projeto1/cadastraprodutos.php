<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produto = $_POST["produto"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];
    include("conectadb.php");

    if ($img1 == "") $img1 = "semimg.gif";
    if ($img1 == "") $img2 = "semimg.gif";

    $sql = "INSERT INTO produto(pro_nome,pro_estoque,pro_preco,pro_descricao,pro_categoria) values ('$nome','$estoque','$preco','$descricao','$categoria')";
    mysqli_query($link, $sql);
    header("Location: listaprodutos.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Produtos</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
<a href="homesistema.html"><input type="button" id="menuhome" value="HOME SISTEMA"></a>

    <div>
        <form action="cadastraprodutos.php" method="POST">
            <label>NOME</label>
            <input type="text" name="nome" maxlength="25" required>
            <br><br>
            <label>IMAGEM I</label>
            <input type="file" name="file1" id="img1" onchange="foot1()">
            <br><br>
            <label>IMAGEM I</label>
            <input type="file" name="file2" id="img2" onchange="foot2()">
            <br><br>
            <label>ESTOQUE</label>
            <input type="number" name="estoque" min="0" required>
            <br><br>
            <label>PREÇO</label>
            <input type="number" name="preco" min="0" step="0.01" required>
            <br><br>
            <input type="submit" value="SALVAR">
        </form>
    </div>

</body>
<script>
    function foto1() {
        document.getElementbyID("foto1a").src = "img/" + (document.getElementById(img1).value).slice(12);
    }

    function foto2() {
        document.getElementById("foto2a").src = "img/" + (document.getElementById("img2").value).slice(12);
    }
</script>

</html>