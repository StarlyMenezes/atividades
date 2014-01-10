<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        $_SESSION["cadastros"] = array();  
    }
    $sexo = $_REQUEST["sexo"];
    $nome = $_REQUEST["nome"];
    $estado =$_REQUEST["estado"];
    
    $aceito = "false";
    if(isset($_REQUEST["$aceito"])){
        $aceito = true;
    }
    
    $pessoa = array();
    $pessoa["nome"] = $nome;
    $pessoa["sexo"] = $sexo;
    $pessoa["aceito"] = $aceito;
    $pessoa["estado"] = $estado;
    
    array_push($_SESSION["cadastros"], $pessoa);
    
    print "Cadastro efetuado com sucesso!";
?>
