<style>
    .MASCULINO{
        color :Cyan;
    }
    .FEMININO{
        color :magenta;
    }
    .BAHIA{
        color :blue;
    }
</style>

<?php
    require_once("menu.php");    
  
    session_start();
    
    if(isset($_SESSION["cadastros"])){        
        $cadastros = $_SESSION["cadastros"];
        
        print "<dl>";
        foreach($cadastros as $pessoa){
            $sexo = $pessoa["sexo"]; 
            $aceito = $pessoa["aceito"];
            $estado = $pessoa["estado"];
            
            if($pessoa != null){
                print "<dt class='$sexo'>" . $pessoa["nome"] . "</dt>";
                print "<dd>Aceita o contrato: " . $sexo  . "</dd>";
                print "<dd>Estado: " . $pessoa["estado"] . "</dd>";
                print "<dd>Aceita o contrato:";
                if($aceito){
                    echo "Sim";
                }
                else{
                    print "Nâo";
                }
            }   print "</dd>";
        }
        print "</dl>";
    }    
    else{
        print "Não existem pessoas cadastradas";
    }

?>
