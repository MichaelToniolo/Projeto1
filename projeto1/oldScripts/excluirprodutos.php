<?php
include("conectadb.php");


if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST["produto_id"];
    $sql ="DELETE FROM produtos WHERE pro_id =$id";
    mysqli_query($link, $sql);
    // header("Location: listaprodutos.php");
    echo($sql);
    // exit();

}
if(!isset($_GET['id'])){
    header("Location:listaprodutos.php");
    exit();
}
$id=$_GET['id'];
$sql="SELECT pro_nome from produtos where pro_id = $id";
$resposta = mysqli_query($link,$sql);
while($tbl = mysqli_fetch_array($resposta)){
    $nome=$tbl[0];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUIR PRODUTOS</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <h2>EXCLUSÃO DE USUARIO</h2>
        <p>GOSTARIA DE EXCLUIR O PRODUTO <b><?=$nome?></b>?</p>
        <form action="excluirprodutos.php" method="post">
            <input type="hidden" name="produto_id" value="<?=$id?>">
            <input type="submit" value="SIM">
        </form>
        <a href="listaprodutos.php"><button id="btnao">NOPE</button></a>
    </div>

    
</body>
</html>