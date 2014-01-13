<html>
    <head>
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <center>
        <?php
            require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Digite o Código do Produto Para Remover</label><br/>
            <input type="text" name="id" />
            
            <input type="submit" value="Remover" />
        </form>
        </center>
    </body>
</html>

<?php
    require_once("menu.php");   
  
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id=> $produto){
            if($produto!= null){ 
                print "[$id] => " . $produto["nome"] . "<br/>";
            }
        }
        
        
    }
    else{
        print "Não Existem Produtos Cadastrados";
    }

?>
