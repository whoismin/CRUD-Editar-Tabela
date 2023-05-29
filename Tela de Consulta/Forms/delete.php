<?php
session_start();
define('MYQSL_HOST', 'localhost:3306' );
define('MYSQL_USER', 'root' );
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'bd_oficina');

try
{
    $PDO = new PDO('mysql:host=' . MYQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);        
}catch( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
    if(isset($_GET['id'])){ 

        $id = $_GET['id'];

        $sql = "DELETE FROM clientes WHERE id = $id"; 
   
        $result = $PDO->query($sql);

        header("Location: dados2.php");
    } 
?>