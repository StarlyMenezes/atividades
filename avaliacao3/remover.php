
<?php
    require_once("menu.php");

    session_start();
    
    if(!isset($_SESSION["cadastros"])){
        echo "Não Existem Produtos Para Remover"; 
    }
    else{
        $id = $_REQUEST["id"];
        
        $cadastros =& $_SESSION["cadastros"];
        $cadastros[$id] = null;
      
        print "Remoção do Produto efetuada com sucesso!";
    }
?>
