<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
             require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
            <label>Didite o código da pessoa para remover</label><br/>
            <input type="text" name="id" />
            
            <input type="submit" value="Remover" />
        </form>
    </body>
</html>

<?php
    require_once("menu.php");   
  
    session_start();
    
    if(isset($_SESSION["cadastros"])){
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id=> $pessoa){
            if($pessoa!= null){ 
                print "[$id] => " . $pessoa["nome"] . "<br/>";
            }
        }
        
        
    }
    else{
        print "Não existem pessoas cadastradas";
    }

?>
