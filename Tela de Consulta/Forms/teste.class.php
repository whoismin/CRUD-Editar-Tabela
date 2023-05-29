<?php

    require_once("class.php");

    class Teste{
    private $principal;

    public function __construct(){
    $principal = new Principal();

    $principal->setId($_POST['id']);
    echo $principal->getId();

    $principal->setNome($_POST['nome']);
    echo $principal->getNome();

    $principal->setEndereco($_POST['endereco']);
    echo $principal->getEndereco();


    $principal->setBairro($_POST['bairro']);
    echo $principal->getBairro();


    $principal->setCep($_POST['cep']);
    echo $principal->getCep();

    $principal->setCidade($_POST['cidade']);
    echo $principal->getCidade();

    $principal->setEstado($_POST['estado']);
    echo $principal->getEstado();
    }
}new Teste();
?>    