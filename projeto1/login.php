<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    include("conectadb.php");

    $sql = "SELECT COUNT(usu_id) from usuario WHERE usu_nome = '$nome' AND usu_senha = '$senha'";
    $resultado = mysqli_query($link,$sql);
    while($tbl = mysqli_fetch_array($resultado)){
        $cont = $tbl[0];
        
    }
    if($cont==1){
        //echo"<script>window.alert('USUARIO OU SENHA INCORRETOS!');</script>";
        echo($sql);
    }
    else{
        //header("Location: listausuarios.php");
        echo($cont);
        echo($sql);

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
    <title>Login</title>
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
        <form action="login.php" method="POST">
            <h1>LOGIN DE USUARIO</h1>
            <input type="text" name="nome" id="nome" placeholder="Nome">
            <p></p>
            <input id="senha" type="password" name="senha" placeholder="Password">
            <img id="olinho" onclick="mostrarsenha()" src="assets/eye.svg" alt="">
            <p></p>
            <input type="submit" name="login" id="login" value="LOGIN">

        </form>
    </div>
</body>

</html>