<?php

define('MYSQL_HOST','localhost:3306');
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','');
define('MYSQL_DB_NAME','bd_oficina');

try{

    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

}catch(PDOException $e){

    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    <title>PHP - Acesso ao Banco de Dados</title>
</head>
<body class="body">
        <div class="container">
            <div class="row" id="navbar">
                <div class="col" id="navbar">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#"><h3 class="title">Consultar Tabela</h3></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white Options" aria-current="page" href="dados2.php">Consultar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-white-50 Options"  aria-current="page" href="index.php">Cadastrar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>   
                    </nav>
                </div>   
                 
         </div>
            <div class="row">
    <style>
        body{
            background-color: rgb(215, 215, 215)		
            text-align: center;
        }
        .table-responsive{
            background-color: white;
            margin-top: 6%;
        }
        
        
        h1{
            margin-top: 3%;
        }
    </style>
<body>
<div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">CEP</th>

                <th class="d-flex justify-content-center" scope="col"><lord-icon
                  src="https://cdn.lordicon.com/dycatgju.json"
                trigger="hover"
                colors="primary:#ffffff"
                style="width:32px;height:30px">
                </lord-icon>
                </th>
                </tr>
                </thead>
                <tbody>
                  <?php
                                    $sql = "SELECT * FROM clientes";
                                    $result = $PDO->query($sql);
                                    $rows = $result->fetchAll();

                                    for($i=0; $i < count($rows); $i++){
                                        
                                        //atribuição dos valores das variáveis com as linhas dos registros 
                                        $id = $rows[$i]['id'];
                                        $nome = $rows[$i]['nome'];
                                        $endereco = $rows[$i]['endereco'];
                                        $bairro = $rows[$i]['bairro']; 
                                        $cidade = $rows[$i]['cidade']; 
                                        $estado = $rows[$i]['estado']; 
                                        $cep = $rows[$i]['cep'];   
                                        
                                        //imprime a tabela na tela
                                        echo '<tr>
                                                 <td>'.$id.'</td>
                                                 <td>'.$nome.'</td>
                                                 <td>'.$endereco.'</td>
                                                 <td>'.$bairro.'</td>
                                                 <td>'.$cidade.'</td>
                                                 <td>'.$estado.'</td>
                                                 <td>'.$cep.'</td>
                                                 <td class="d-flex justify-content-center">
                                                   
                                                 <a class="btn btn-outline-dark"  href="editar.php?id='.$id.'">
                                                    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                                                    <lord-icon
                                                    src="https://cdn.lordicon.com/hkkhwztk.json"
                                                    trigger="hover"
                                                    colors="primary:#121331"
                                                   
                                                     style="width:32px;height:32px">
                                                     </lord-icon>
                                                     </a>
                                                     &nbsp
                                                    <a class="btn btn-outline-dark" href="delete.php?id='.$id.'">
                                                    <lord-icon
                                                    src="https://cdn.lordicon.com/jmkrnisz.json"
                                                    trigger="hover"
                                                    colors="primary:#121331"
                                                   style="width:32px;height:32px">
                                                  </lord-icon>
                                                  </a>
                                                  
                                                </td>
                                              </tr>';
                                    }
                                ?>
            </tbody>
       </table><br>
        </div>
        </div>

</body>
</html>