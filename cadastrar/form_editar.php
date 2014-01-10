<html>
    <head>
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <?php
             require_once("menu.php");
        ?>
        <form action="remover.php" method="post">
           <label>Digite o código da pessoa para editar :</label>
            <input type="text" name="id" />
            <br/>
            <?php require_once("campos_pessoa.php"); ?>
            <input type="submit" value="Editar" />
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
                print "[$id] => " . $pessoa["nome"]  . "<br/>";
            }
        }
        
        
    }
    else{
        print "Não existem pessoas cadastradas";
    }

?>
