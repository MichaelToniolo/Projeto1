<?php
#LOCALIZA PC COM BANCO(NOME DO COMPUTADOR)
$servidor = "localhost";
#NOME DO BANCO
#$banco = "projeto1";
$banco = "projeto1";
#USUARIO DE ACESSO
$usuario = "admin";
#SENHA DO USUARIO
$senha = "123";
#LINK DE ACESSO
$link = mysqli_connect($servidor, $usuario, $senha, $banco);