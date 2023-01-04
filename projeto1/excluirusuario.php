<?php
include('conectadb.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['usuario_id'];
    $sql = "DELETE FROM usuario WHERE usu_id = $id";
    mysqli_query($link,$sql);
    header("Location: listausuarios.php");
    echo($sql);
    exit();
}

if(!isset($_GET['id'])){
    header("Location:listausuarios.php");
    exit();

}
$id=$_GET['id'];
$sql="SELECT usu_nome FROM usuario WHERE usu_id = '$id'";
$resposta = mysqli_query($link,$sql);
while($tbl = mysqli_fetch_array($resposta)){
    $nome = $tbl[0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>APAGAR USUARIO</title>
</head>
<body>
    <div>
        <h2>EXCLUSAO DE USUARIO</h2>
        <p>GOSTARIA DE EXCLUIR O USUARIO <b><?=$nome?></b>?
    <form action="excluirusuario.php" method="post">
        <input type="hidden" name="usuario_id" value="<?=$id?>">
        <input type="submit" value="SIM">
    </form>
    <a href="listausuarios.php"><button id="btnnao">NOPE</button></a>
    </div>
    
</body>
</html>