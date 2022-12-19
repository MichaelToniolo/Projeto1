<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    include("conectadb.php");

    //Verifica se usuario ja existente
    $sql = "SELECT COUNT(usu_id) from usuario WHERE usu_nome = '$nome'";

    $resultado = mysqli_query($link,$sql);
    while($tbl = mysqli_fetch_array($resultado)){
        $cont = $tbl[0];
    }

    if($cont==1){
        echo"<script>window.alert('Usuario já Cadastrado!');</script>";
    }else{
       $sql = "INSERT INTO usuario (usu_nome, usu_senha) values ('$nome','senha')";
        mysqli_query($link,$sql);
        header("Location: listausuarios.php");
    }

    

    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylecadastra.css">
    <!--<script src="main.js"></script>-->
    <title>CADASTRA USUARIO</title>
</head>

<body>
    <div class="container">

        <!-- SCRIPT PARA MOSTRAR SENHA-->
        <script>
            function mostrarsenha() {
                var tipo = document.getElementById("senha");
                if (tipo.type == "password") {
                    tipo.type = "text";
                } else {
                    tipo.type = "password";
                }
            }
        </script>
        <!-- FIM SCRIPT PARA MOSTRAR SENHA-->

        <form action="cadastrausuario.php" method="POST">
            <h1>Cadastro de Usuário</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <p> </p>
            <input id="senha" type="password" placeholder="Password">
            <img onclick="mostrarsenha()" src="assets/eye.svg" alt="">
            <p></p>
            <input type="submit" name="cadastrar" id="cadastrar" value="CADASTRAR">

        </form>

    </div>
</body>

</html>