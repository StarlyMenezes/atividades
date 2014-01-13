<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não Existem Produtos Para Editar"; 
     
     
    }
    
    else{
        $id = $_REQUEST["id"];
        $nome = $_REQUEST["nome"];
        $novo = $_REQUEST["novo"];
        $entrega = $_REQUEST["entrega"];
        $detalhes = $_REQUEST["detalhes"];  
        $aceito = $_REQUEST["aceito"];
        $cor = $_REQUEST["cor"];
        
    }
    
    $aceito = "false";
    if(isset($_REQUEST["$aceito"])){
        $aceito = true;
     
        $produto = array();
        $produto["nome"] = $nome;
        $produto["novo"] = $novo;
        $produto["aceito"] = $aceito;
        $produto["entrega"] = $entrega;
        $produto["detalhes"] = $detalhes;
        $produto["cor"] = $cor;
        
        
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = $produto;
      
        print "Edição do produto Efetuada Com Sucesso!";
    }
?>
