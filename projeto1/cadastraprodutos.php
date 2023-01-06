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

    $sql = "INSET INTO produto(pro_nome,pro_estoque,pro_preco,pro_descricao,pro_categoria) values ('$nome','$estoque','$preco','$descricao','$categoria')";
    mysqli_query($link, $sql);
    header("Location: listaprodutos.php");
    exit();
}
