<?php 
    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";

    CREATE TABLE `clientes` (
        `id` int(3) NOT NULL,
        `nome` varchar(100) NOT NULL,
        `endereco` varchar(100) NOT NULL,
        `bairro` varchar(50) NOT NULL,
        `cep` int(9) NOT NULL,
        `cidade` varchar(50) NOT NULL,
        `estado` enum('SP','RJ','MG','ES') NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    ALTER TABLE `clientes`
    ADD PRIMARY KEY (`id`);

    ALTER TABLE `clientes`
    MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
    COMMIT;

    $idForm = $_POST['id'];
    $nomeForm = $_POST['nome'];
    $enderecoForm = $_POST['endereco'];
    $bairroForm = $_POST['bairro'];
    $cepForm = $_POST['cep'];
    $cidadeForm = $_POST['cidade'];
    $estadoForm = $_POST['estado'];

    try {
        $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

    } catch (PDOException $ex) {
        echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
    }

    $sql = "INSERT INTO `clientes`(`id`, `nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES ('$idForm', '$nomeForm','$enderecoForm','$bairroForm','$cepForm', '$cidadeContatoForm','$estadoForm')";

    $cadastrarCliente = $pdo->prepare($sql);
    $cadastrarCliente->execute();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
  </head>
    <body class="body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><h3 class="title">SISTEMA WEB</h3></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white Options" aria-current="page" href="index.php">Cadastrar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-white-50 Options"  aria-current="page" href="dados2.php">Consultar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>   
                    </nav>
                </div>    
            </div>
            <div class="row">
                <div class="col">
                <p class="subtitle">Cadastrar - Agendamento de Potenciais Clientes</p>
                <p class="subtitle_two">Sistema utilizado para Agendamento de serviços.</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1>Cadastro Realizado</h1>
                </div>
            </div>
        </div>        
  </body>
</html>