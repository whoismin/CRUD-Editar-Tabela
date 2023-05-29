<?php

include_once('conexao.php');

$id = $_GET['id'];


    $sql = "SELECT * FROM clientes WHERE id = :id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);


    $sqlDelete = "DELETE FROM clientes WHERE id= :id";
    $stmtDelete = $PDO->prepare($sqlDelete);
    $stmtDelete->bindValue(':id', $id);
    $resultDelete = $stmtDelete->execute();
    
    if ($resultDelete !== false) {

        header("Location: dados2.php");
        exit();
    } else {

        echo "Erro ao excluir os dados.";
    }
?>