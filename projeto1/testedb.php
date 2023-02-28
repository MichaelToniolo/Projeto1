<?php 
$conecta = mysqli_connect('localhost', 'admin', '123') or print ("ERRO"); 
print "Conexao OK!"; 
mysqli_close($conecta); 
?>