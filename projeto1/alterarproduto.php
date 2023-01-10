<?php
include("conectadb.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $descricao=$_POST['descricao'];
    $categoria=$_POST['categoria'];
    $foto1=$_POST['file1'];
    $foto_old=$_POST['foto_old1'];
    $foto2=$_POST['file2'];
    $foto_old=$_POST['foto_old2'];
    $estoque=$_POST['estoque'];
    $preco=$_POST['preco'];
    
    if($img1=="") $img1 = $foto_old1;
    if($img2=="") $img2 = $foto_old2;
    $sql = "UPDATE produtos SET pro_nome=pro_nome='$nome',pro_descricao='$descricao',pro_categoria='$categoria',img1='$img1',img2='$img2',pro_estoque='$estoque',pro_preco='$preco' WHERE pro_id='$id'";
    mysqli_query($link,$sql);
    header("Location:listaprodutos.php");
    exit();
}

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE pro_id = '$id'";
$resultado = mysqli_query($link,$sql);
while($tbl=mysqli_fetch_array($resultado)){
    $nome = $tbl[1];
    $descricao=$tbl[4];
    $categoria=$tbl[5];
    $img1=$tbl[6];
    $img2=$tbl[7];
    $estoque=$tbl[2];
    $preco=$tbl=[3];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTERA PRODUTO</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div>
        <form action="alterarproduto.php" method="post">
            <input type="hidden" value="<?$id?>" name="id">
            <label>PRODUTO</label>
            <input type="text" name="nome" value="<?=$nome?>" maxlength="25" required>
            <label>DESCRICAO</label>
            <input type="text" name="descricao" value="<?=$descricao?>" maxlength="25" required>
            <label>CATEGORIA</label>
            <input type="text" name="categoria" value="<?=$categoria?>" maxlength="25" required>
            <label>IMAGEM 1</label>
            <input type="file" name="img1" value="<?=$img1?>" onchange="foto1()">
            <img src="img/<?=$foto1?>" width="50px" id="foto1a">
            <input type="hidden" name="foto_old1" value="<?=$foto1?>">
            <label>IMAGEM 2</label>
            <input type="file" name="img2" value="<?=$img2?>" onchange="foto2()">
            <img src="img/<?=$foto2?>" width="50px" id="foto2a">
            <input type="hidden" name="foto_old2" value="<?=$foto2?>">
            <br><br>
            <label>ESTOQUE</label>
            <input type="number" value="<?=$estoque?>" name="estoque" min="0" required>
            <br><br>
            <label>PRECO</label>
            <input type="number" name="preco" value="<?=$preco?>" min="0" step="0.01" required>
            <br><br>
            <input type="submit"value="SALVAR">
        </form>
    </div>
  

</body>
</html>