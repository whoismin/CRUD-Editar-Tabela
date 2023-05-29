<?php

    session_start();
    
    define('MYSQL_HOST','localhost:3306');
    define('MYSQL_USER','root');
    define('MYSQL_PASSWORD','');
    define('MYSQL_DB_NAME','bd_oficina');

    try{

        $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    }catch(PDOException $e){

        echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    }

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade= $_POST['cidade'];
    $estado = $_POST['estado'];

    $_SESSION['nome'] = $nome;
    $_SESSION['endereco'] = $endereco;
    $_SESSION['bairro'] = $bairro;
    $_SESSION['cidade'] = $cidade;
    $_SESSION['estado'] = $estado;
    $_SESSION['cep'] = $cep;


    $sql = "INSERT INTO clientes ( nome, endereco, bairro, cep, cidade, estado) VALUES (:nome, :endereco, :bairro, :cep, :cidade, :estado)";

    $stmt = $PDO->prepare($sql);

    $stmt->execute(['nome' => $nome, 'endereco' => $endereco, 'bairro' => $bairro, 'cidade' => $cidade, 'estado' => $estado, 'cep' => $cep]);


    //redirecionamento para a página dados02.php
    header("Location: dados2.php");

    exit();


?>


