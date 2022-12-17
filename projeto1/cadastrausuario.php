<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    include("conectadb.php");

    if ($nome == ($sql = "SELECT * from usuario where usu_nome == '$nome'")) {
        echo "EXECUTOU IF";
    }
    /*$sql = "INSERT INTO usuario (usu_nome, usu_senha) values ('$nome','senha')";
    mysqli_query($link,$sql);
    
    header("Location: listausuarios.php");*/
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!--<script src="main.js"></script>-->
    <title>CADASTRA USUARIO</title>
</head>

<body>
    <div>
        </form>

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