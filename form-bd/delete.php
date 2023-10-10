<?php

    if(!empty($_GET['idcliente']))
    {
        include_once('form-bd.php');

        $id = $_GET['idcliente'];

        $sqlSelect = "SELECT * FROM cliente WHERE idcliente=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente WHERE idcliente=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');

?>