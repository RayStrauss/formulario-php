<?php 

    $dbHost = 'Localhost';
    $dbUsername = 'aluno';
    $dbPassword = 'admin';
    $dbName = 'bd-com-fomulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

   //     if ($conexao->connect_errno)
   //     {
   //         echo  "Erro";
   //     }
   //     else 
   //     {
   //         echo "Conexão efetuada com sucesso!";
   //     }

?>