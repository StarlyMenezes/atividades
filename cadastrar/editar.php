<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não existem pessoas para editar"; 
    }
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $sexo = $_REQUEST["sexo"];
        $estado = $_REQUEST["estado"];
        
    $aceito = "false";
    if(isset($_REQUEST["$aceito"])){
        $aceito = true;
    { 
        $pessoa = array();
        $pessoa["nome"] = $nome;
        $pessoa["sexo"] = $sexo;
        $pessoa["aceito"] = $aceito;
        $pessoa["estado"] = $estado;
        
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $pessoa;
      
        print "Edição efetuada com sucesso!";

    }
?>
